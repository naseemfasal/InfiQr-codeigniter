# InfiQr-codeigniter
InfiQR Qrcode generator library for PHP codeigniter

        // Load library in your controller
         $this->load->library('infiqr');
        // Call Infiqr and pass the content to simply generate image output in your controller
        
         $this->infiqr->generate('Hello, testing qr code');

Contents 



##### Data options 

###### Phone number
```
    $phoneNo = '(049)012-345-678'; 
     
    // we building raw data 
    $codeContents = 'tel:'.$phoneNo; 
    $this->load->library('infiqr');
    $this->infiqr->generate(codeContents);    
```

###### Email number
    $email='testing@test.com';
    $codeContents = 'mailto:'.$email; 

###### Business card

    // here our data 
    $name = 'John Doe'; 
    $phone = '(049)012-345-678'; 
     
    // we building raw data 
    $codeContents  = 'BEGIN:VCARD'."\n"; 
    $codeContents .= 'FN:'.$name."\n"; 
    $codeContents .= 'TEL;WORK;VOICE:'.$phone."\n"; 
    $codeContents .= 'END:VCARD'; 
    
    
    Source : - 
    This Library was built using [PHPqrcode](http://phpqrcode.sourceforge.net/examples/index.php?example=025).


 Feel free to send me an email if you have any problems.

Thanks, - Naseem Fasal naseem at infiyo dot com  /  @naseemfasal 
