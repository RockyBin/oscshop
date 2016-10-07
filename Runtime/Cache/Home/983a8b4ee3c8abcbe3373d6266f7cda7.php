<?php if (!defined('THINK_PATH')) exit();?><div class="left col-md-6 col-sm-6 col-xs-12">
  <h2>我的个人信息</h2>
  <span class="required">*</span> 用户名<br /> 
  <input type="text" name="uname" value="" class="large-field text" />
  <br />
   邮箱<br />
  <input type="text" name="email" value="" class="large-field text" />
  <br />
  
  <span class="required">*</span> 姓名<br />
  <input type="text" name="name" value="" class="large-field text" />
  <br /> 
  
  <span class="required">*</span> 电话<br />
  <input type="text" name="telephone" value="" class="large-field text" />
  <br />
  <div class="password_form">
	  <h2>我的密码</h2>
	  <span class="required">*</span> 密码<br />
	  <input type="password" name="password" value="" class="large-field text" />
	  <br />
	  <span class="required">*</span> 确认密码 <br />
	  <input type="password" name="confirm" value="" class="large-field text" />
  </div>
</div>
<div class="right col-md-6 col-sm-6 col-xs-12">
	<h2>我的收获地址</h2>
	<style>
		#area select{width:100px;}
		
	</style>
	<span class="required">*</span> 所在地<br />
	 <p id="area">
        <select name="province_id" id="province">
            <option value="-1" selected>省份</option>
            <?php if(is_array($province)): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["area_id"]); ?>"><?php echo ($v["area_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
        <select name="city_id" id="city">
            <option value="-1">城市</option>
        </select>  
     </p>
	<br />

	<span class="required">*</span> 地址<br />
	<input type="text" name="address" value="" class="large-field text" />
	<br />

<br />
<br />
<br />
</div>


<div class="buttons">
  <div class="left col-md-6 col-sm-6 col-xs-12">
    <input type="button" value="继续" id="button-register" class="btn btn-primary btn-continue" />
  </div>
</div>

<script type="text/javascript">
		$("#province").change(function(){
            var ajaxurl='<?php echo U("/c_getarea");?>';
            var areaId=this.value;
            var areaType='city';
            $('#country').remove();
            if(areaId!=-1){
            $.post(ajaxurl,{'areaId':areaId},function(data){                
                if(areaType==='city'){
                   $('#'+areaType).html('<option value="-1">城市</option>');              
                }
              
                if(areaType!=='null'){
                    $.each(data,function(no,items){
                        $('#'+areaType).append('<option value="'+items.area_id+'">'+items.area_name+'</option>');
                    });
                }
            });
           }else{
           	$('#'+areaType).html('<option value="-1">城市</option>');       
           }
        }); 
        
		$("#city").change(function(){
            var ajaxurl='<?php echo U("/c_getarea");?>';
            var areaId=this.value;
            var areaType='county';
      		 $('#country').remove();
            $.post(ajaxurl,{'areaId':areaId},function(data){   
                   
               if(data!=null){
              
               	var html='';
               	html+=' <select name="country_id" id="country">'
               	$.each(data,function(no,items){
                      html+=  '<option value="'+items.area_id+'">'+items.area_name+'</option>';
                 });
               	html+='</select>';
               	$('#area').append(html);
               }
            });
           
        }); 
</script>