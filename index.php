
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>สั่งอาหารผู้ป่วย </title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        
    </head>
    <body >
    
            
        <div class="col-md-6 col-md-offset-3 ">
        


       <form id="food_form" action="" method="post">
        <div class="panel panel-info">
            <div class="panel-heading">ข้อมูลผู้ป่วย</div>
            <div class="panel-body">
                <div class="form-row ">
                <div class="form-group col-md-3 ">
                    <label>Hn </label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="hn" id="hn" placeholder="" required> 
                        <span class="input-group-btn">
                            <button class="btn btn-default glyphicon glyphicon-search" type="button" id="search"></button>
                        </span>
                    </div>
                    
                </div>


        
                <div class="form-group col-md-3">
                    <label>An </label>
                    <input type="text" class="form-control" name="an" id="an" placeholder="" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="">ชื่อ - นามสกุล </label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 ">
                    <label>อายุ </label>
                    <input type="text" class="form-control" name="age" id="age" placeholder="" required>
                </div>
                <div class="form-group  col-md-6">
                <label for="">สิทธิ</label>
                    <input type="text" class="form-control" name="rights" id="rights" placeholder="" required>
                </div>
            </div>

            </div>
        </div>

        <div class="panel panel-info">
            <div class="panel-heading">ข้อมูลตึกผู้ป่วย</div>
            <div class="panel-body">
            <div class="form-row ">
                <div class="form-group col-md-5">
                    <label>ตึกชื่อ</label>
                    <input type="text" class="form-control" name="ward" id="ward" placeholder="" required>
                </div>
                <div class="form-group col-md-3">
                <label for="">เลขห้อง/เลขเตียง</label>
                    <input type="text" class="form-control" name="no" id="no" placeholder="" required>
                </div>
                <div class="form-group col-md-4">
                <label for="">สั่งอาหารของวันที่</label>
                    <input type="date" class="form-control" name="date" id="date" placeholder="" required>
                </div>
            </div>
            </div>
        </div>
        
        

        <div class="panel panel-info">
            <div class="panel-heading">
            
                 
                <label>มื้อเช้า</label> 

                <label>(มื้ออื่นที่เหมือนกัน</label>           
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">มื้อกลางวัน</label>
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">มื้อเย็น)</label>
                    
            </div>
            <div class="panel-body">
                <div class="form-group col-md-6">
                        <label>ประเภทอาหาร : </label>
                        <select class="form-control" name="food_type_breakfast" id="food_type_breakfast" required>
                            <option>Default select</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>ประเภทอาหารย่อย</label>
                        <select class="form-control" name="food_sub_breakfast" id="food_sub_breakfast" required>
                            <option>Default select</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label>ข้อความ</label>
                        <textarea class="form-control" name="comment_breakfast" id="comment_breakfast" rows="5"></textarea >
                    </div>
                </div>
                    
            </div>
            
            
            <div class="panel panel-info">
            <div class="panel-heading">
            
                 
                <label>มื้อกลางวัน</label> 
                    
            </div>
            <div class="panel-body">
                <div class="form-group col-md-6">
                        <label>ประเภทอาหาร : </label>
                        <select class="form-control" name="food_type_lunch" id="food_type_lunch" required>
                            <option>Default select</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>ประเภทอาหารย่อย</label>
                        <select class="form-control" name="food_sub_lunch" id="food_sub_lunch" required>
                            <option>Default select</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label>ข้อความ</label>
                        <textarea class="form-control" name="comment_lunch" id="comment_lunch" rows="5"></textarea>
                    </div>
                </div>
                    
            </div>
        

        <div class="panel panel-info">
            <div class="panel-heading">
            
                 
                <label>มื้อเย็น</label> 

            </div>
            <div class="panel-body">
                <div class="form-group col-md-6">
                        <label>ประเภทอาหาร : </label>
                        <select class="form-control" name="food_type_dinner" id="food_type_dinner" required>
                            <option>Default select</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>ประเภทอาหารย่อย</label>
                        <select class="form-control" name="food_sub_dinner" id="food_sub_dinner" required>
                            <option>Default select</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label>ข้อความ</label>
                        <textarea class="form-control" name="comment_dinner" id="comment_dinner" rows="5"></textarea>
                    </div>
                </div>
                    
            </div>
        
            <center> 
                <button type="submit" align="center" class="btn btn-primary" name="submit" id="submit">บันทึก</button>
            </center>

        </div>
  
        </form>
        </div>
   
    

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            
        <script>

            
                $("#search").click(function() {
                    var hn = $('#hn').val();

                    $.ajax({
                        type:'POST',
                        url:'getData.php',
                        dataType: "json",
                        data:{hn:hn},
                        success:function(data){
                            if(data.status == 'ok'){
                                $('#an').val(data.result.an);
                                $('#name').val(data.result.fname+"  "+data.result.lname);
                                $('#ward').val(data.result.ward_name);
                                $('#no').val(data.result.contCode);
                                $('#rights').val(data.result.pay_typedes);

                                $('#age').val(data.result.birthDay);
                           
                            }else{
                               
                                alert("ไม่พบข้อมูล!!!");
                            } 
                        }
                    });

                });

                  




                // $('#hn').keydown(function(event){
                //     if(event.keyCode == 13) {

                //         
                //     return false;               
                //     }
                // });

        </script>    

        





    </body>
</html>
