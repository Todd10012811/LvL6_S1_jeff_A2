<!-- importing the header -->
<?php include(APPROOT . "/views/includes/header.php"); ?> 
<section>
        <div class="container1">
            <div class="content4">
               <div class="box1">
                  <div class="login">
                      
                        <h1>Contact Form</h1>
                        <p>If you would like to contact us and stay informed of all the latest and greatist deal and advise that Tech Inspect has to offer please fill in you details in the below form</p>
                   
                    <form name="form" class="form" method="POST">
                          
                        <div><label for="FName">First Name</label></div>
                        <div><input type="text" name="FName" /><br></div>
                        <div><label for="LName">Last Name</label></div>
                        <div><input type="text" name="LName" /><br></div>
                        <div><label for="email">Email</label></div>
                        <div><input type="text" name="email" /><br></div>
                        <div><label for="Phone">Phone</label></div>
                        <div><input type="text" name="Phone" /><br></div>
                        
                        <div></div>
                        <input type="button" class="button" value="Request" onClick="">
                    </form><br class="br">
                
                </div>
               </div>
               <div class="box2">
                    <h1>Appointment Request</h1>
                    <p>If you would like to request a service or book an appiontment with our friendly team to talk about fixing one of your computer you can enter your contact details below and one of our team will contact you to make an appointment.</p>
               
                <form name="form" class="form">
                    <div><label for="Name">Name</label></div>
                    <div><input type="text" name="Name" /><br></div>
                    <div><label for="Phone">Phone Number</label></div>
                    <div><input type="text" name="Phone" /><br></div>
                    <div><label for="Address">address</label></div>
                    <div><input type="text" name="Address" /><br></div>
                    <div><label for="Time">Time Requested</label></div>
                    <div><input type="text" name="Time" /><br></div>
                    <div></div>
                    <input type="button" class="button" value="Request" onClick="">
                </form><br class="br">
               </div>
             
              
           
            </div>
        </div>
     </section>
     <!-- importing the footer -->
<?php include(APPROOT . "/views/includes/footer.php"); ?>