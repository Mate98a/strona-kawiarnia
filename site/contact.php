<section id="contact">
        <div >
                <form method="POST" name="contactform" action="/API/contact"> 
                <h2>kontakt</h2>
                <p>
                <label for='name'>Imię:</label> <br>
                <input type="text" name="name">
                </p>
                <p>
                <label for='email'>Email :</label> <br>
                <input type="text" name="email"> <br>
                </p>
                <p>
                <label for='message'>Wiadomość:</label> <br>
                <textarea name="message"></textarea>
                </p>
                <input type="submit" value="Submit"><br>
                </form>
                
                <script language="JavaScript">
                var frmvalidator  = new Validator("contactform");
                frmvalidator.addValidation("name","req","Wpisz prawidłowe imię"); 
                frmvalidator.addValidation("email","req","Wpisz e-mail"); 
                frmvalidator.addValidation("email","email","Wpisz prawidłowy e-mail"); 
                frmvalidator.addValidation("message","req","Wpisz prawidłową wiadomość"); 
                </script>
           

            
        </div>
        
    </section>