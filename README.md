# InfiQr-codeigniter
InfiQR Qrcode generator library for PHP codeigniter

        // Load library in your controller
         $this->load->library('infiqr');
        // Call Infiqr and pass the content to simply generate image output in your controller
        
         $this->infiqr->generate('Hello, testing qr code');
