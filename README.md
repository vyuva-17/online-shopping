# onlineShopping
 Hi, 
        It is a  Responsive Web Application(E-commerce) with Dynamic Data populated Using php, I have written comments as much as possible for code understanding DB dump is also checked in for instance installation with out trouble  Base URL,Technical Stack,Functionalities and upcomming Release is mentioned below. Kindly look in to it the column which is mentioned above for each details clearly with more information.
      
# Installation 
    1.Kindly clone the repository.
    2. Make sure your are having LAMP,WAMP,XAMPP to run server for this application otherwise kindly download any one software depends up-on OS.
       2.1 OS:
            Windows ---> XAMPP,WAMP are prefered.
            Linux ---->  LAMP is prefered.
    3. Kindly import the database dump in mysql data base for DB Structure.  
# Base URL

     http://localhost/onlineShopping  
     
# Technical Stack
    Lamp Stack:
      Back-End --> Core PHP and  MySQL is used. 
      Front-End --> Bootstrap-v4.5.0,jquery-v3.5.1,Html,CSS,Javascript used.
      
# Functionalities Implemented
    1. Responsiveness.
    2. Customized Field Validations and focus the field when it fails in validation.
    3. Sign-In Password is Encrypted in md-5 Format.
    4. Sign-In Details are saved in data base with static contact details using Ajax by posting the form data in to service after validation check on submit.
    5. Saved user data is send as response then the response is stored in local storage for session management.
    6. Session management is handeled till you logout the applicatione even if you have closed the tab by mistake using local storage.
    7. Data to load in pages will be dynamic it is fetched from back-end(DB--> particular master table) for future purpose by calling services through Ajax in all Page.
    8. All data fetched from services is stored in local storage and served data to UI from database to provide data if user network is poor
    9. SEO concept is also implemented by implementing proper meta data.
    10. Accessibility in this application for all user.
    11. Code Reusablitiy I have implement each functionality as componenent for reusability. Kindly look in to my app directory structure for more details.
    12. Db configuration need to change in config.ini under config folder call the defined variables for DB Configuration Management.
    13. To Avoid Sql Query Injection I have called the db constants instead of db details. 
    
# Update
   1. Back-end works will be transformned to service integration.
   2. convert this application coding standard to mvc architecture.
   3. Authentication Functionality improvements.
   
