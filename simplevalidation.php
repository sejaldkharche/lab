<html>
    <head>
        
    </head>
    
        <body>
        <script>
        function v(){
            var name = document.form.myform.name.value;

            if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}
    }
    </script>
         <form name="myform" method="post" action="abc.jsp" onsubmit="return v()" >  
         Name: <input type="text" name="name"><br/>  
         <input type="submit" value="register">  

        </form>  
        </body>
   
</html>