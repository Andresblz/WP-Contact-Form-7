# UNIQUE CODE GENERATOR - CONTACT FORM 7
This function generates a unique code of the style: YYXXMMXXDDXXDXX


*_XX - Random characters_
*_YY - last 2 digits of the year_
*_MM - current month_
*_DD - current day_


The field will be hidden in the form.


## INSTALLATION
1. Open the folder wp-content > plugins > contact-form-7 > includes > functions.php

2. If no php code is written, copy and paste the following code
3. 
4. In case you have written code, copy from add_action and paste at the end of functions.php


## HOW IT WORKS
Add the field [coupon_code] to the CF7 form, when the user fills the form it will return the value through [rand_code].
