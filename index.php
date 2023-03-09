<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Email regis of MIKE Award notification mobile.">
    <title>MIKE Award notification mobile - Email regis</title>
  </head>

  <style>

      /*All the stylesheet */
      
      /* -------------------------------------
          Root
      ------------------------------------- */
      body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      -webkit-font-smoothing: antialiased;
      font-size: 14px;
      line-height: 1.4;
      -ms-text-size-adjust: 100%;
      -webkit-text-size-adjust: 100%; 
    }

    img {
      border: none;
      /* -ms-interpolation-mode: bicubic; */
      max-width: 100%; 
    }

    table {
      /* border-collapse: separate; */
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
      width: 100%; }
      table td {
        font-family: sans-serif;
        font-size: 14px;
        vertical-align: top; 
      }

      /* -------------------------------------
          Class
      ------------------------------------- */

      .container {
        max-width: 600px;
        max-height: auto;
        margin: 0 auto;
        box-sizing: border-box;
        background-color: #ffffff 0% 0% no-repeat padding-box;
        opacity: 1;
      }

      .body {
        width: 600px; 
      }

      /* This should also be a block element, so that it will fill 100% of the .container */
      .content {
        box-sizing: border-box;
        display: block;
        margin: 0 auto;
        max-width: 600px;
        max-height: auto;
        height: auto;
        top: 572px;
        left: 0px;
        background: #fff 0% 0% no-repeat padding-box;
        opacity: 1;
      }

      /* HEADER, FOOTER, MAIN */

      .header{
        clear: both;
        text-align: center;
        width: 600px;
        height: 127px;
        background-color: #000000;
        opacity: 1;
        top: 0px;
        left: 0px;
        position: relative;
      }
        .header img{
          top: 24px;
          left: 260px;
          width: 80px;
          height: 79px;
          background-color: transparent 0% 0% no-repeat padding-box;
          opacity: 1;
        }

      .main {
        background: #ffffff;
        border-radius: 3px;
        width: 100%; 
      }

      .wrapper {
        box-sizing: border-box;
        padding: 0px; 
      }

      .content-block {
        padding-bottom: 0px;
        padding-top: 0px;
      }

      .footer {
        clear: both;
        text-align: center;
        width: 100%; 
        height: 146px;
        background-color: #000000;
        opacity: 1;
        top: 572px;
        bottom: 0px;
        left: 205px;
        background: #000000 0% 0% no-repeat padding-box;
        opacity: 1;
        justify-content: center;
      }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
          color: #999999;
          text-align: center; 
          font-family: normal normal Open sans-serif;
          font-size: 17px;
          font-weight: normal;
          letter-spacing: 0px;
          color: #ffffff;
          margin: 0;
          padding-bottom: 15px; 
      }

      /* TYPOGRAPHY */

      h1,
      h2,
      h3,
      h4 {
        color: #000000;
        font-family: sans-serif;
        font-weight: 400;
        line-height: 1.4;
        margin: 0;
        margin-bottom: 30px;

      }

      h1 {
        color: #000000;
        font-family: normal normal Open sans-serif bold 43px;
        letter-spacing: 0px;
        opacity: 1;
        font-weight: bold;
        font-size: 32px;
        line-height: 68px;
        text-align: center;
        margin: 0;
        top:92 px;

      }

      p,
      ul,
      ol {
        font-family: sans-serif;
        font-size: 14px;
        font-weight: normal;
        color: #5E5E5E;
        margin: 0;
        margin-bottom: 15px; 
      }
        p li,
        ul li,
        ol li {
          list-style-position: inside;
          margin-left: 0px; 
      }

      a {
        color: #3498db;
        text-decoration: underline; 
      }

      /* BUTTONS */

      .btn {
        box-sizing: border-box;
        width: 100%; }
        .btn > tbody > tr > td {
          padding-bottom: 15px; }
        .btn table {
          width: auto; 
      }
        .btn table td {
          background-color: #ffffff;
          border-radius: 0px;
          text-align: center; 
      }
        .btn a {
          background-color: #E0CB90;
          border-radius: 0px;
          color: #151515;
          height: 44px;
          cursor: pointer;
          display: padding-box;
          font-size: 14px;
          font-weight: bold;
          margin: 0;
          padding: 12px 25px;
          text-decoration: none;
          text-transform: capitalize; 
          text-align: center;
          padding-left: 170px;
          padding-right: 170px;
          opacity: 1;

      }

      .btn-primary table td {
        background-color: #3498db; 
      }

      .btn-mike table td {
        background-color: #E0CB90;
      }

      .btn-primary a {
        background-color: #3498db;
        border-color: #3498db;
        color: #ffffff; 
      }

      /* -------------------------------------
          ID
      ------------------------------------- */
      #sosmed-flex {
        display: flex;
        flex-direction: row;
        text-align: center;
        width: 100%;
        justify-content: center;
        position: relative;

      }

      #sosmed-item{
        display: flex;
        flex-wrap: wrap;
        width: 17px;
        opacity: 1;
        position: relative;
        text-align: center;
        justify-content: center;
        top:0;
        left: 15px;
        bottom: 0;
        right: 15px;
        
      }

      a#sosmed-item{
        margin-right: 17px;
      }

      /* -------------------------------------
          RESPONSIVE AND MOBILE FRIENDLY STYLES
      ------------------------------------- */
      @media only screen and (max-width: 620px) {
        table.body h1 {
          font-size: 28px !important;
          margin-bottom: 10px !important; 
        }
        table.body p,
        table.body ul,
        table.body ol,
        table.body td,
        table.body span,
        table.body a {
          font-size: 16px !important; 
        }
        table.body .wrapper,
        table.body .article {
          padding: 0px !important; 
        }
        table.body .content {
          padding: 0 !important; 
        }
        table.body .container {
          padding: 0 !important;
          width: 100% !important; 
        }
        table.body .main {
          border-left-width: 0 !important;
          border-radius: 0 !important;
          border-right-width: 0 !important; 
        }

        table.body .btn a {
          width: 100% !important; 
        }
        table.body .img-responsive {
          height: auto !important;
          max-width: 100% !important;
          width: auto !important; 
        }
      }
        
        h1 {
          font-size: 28px;
          line-height: 50px;
        }
        .footer {
          height: auto;
        }


      /* -------------------------------------
          PRESERVE THESE STYLES IN THE HEAD
      ------------------------------------- */
      @media all {
        .ExternalClass {
          width: 100%; 
        }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
          line-height: 100%; 
        }
        .apple-link a {
          color: inherit !important;
          font-family: inherit !important;
          font-size: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important;
          text-decoration: none !important; 
        }
        #MessageViewBody a {
          color: inherit;
          text-decoration: none;
          font-size: inherit;
          font-family: inherit;
          font-weight: inherit;
          line-height: inherit;
        }
        .btn-primary table td:hover {
          background-color: #34495e !important; 
        }
        .btn-primary a:hover {
          background-color: #34495e !important;
          border-color: #34495e !important; 
        } 
      }

      /* -------------------------------------
          OTHER STYLES THAT MIGHT BE USEFUL
      ------------------------------------- */

      hr {
        border: 0;
        border-bottom: 1px solid #f6f6f6;
        margin: 20px 0; 
      }

  </style>
  
  <body>
    <div class="container">
      <div class="header" style="width: 100%;">
        <img style="width: 100%; padding-top:24px; padding-bottom:24px;" src="https://indonesiamikeaward.com/wp-content/themes/binus-2023-299-mikeaward/images/email/logo-mikeaward-white-circle.svg" alt="MIKE AWARD Logo"></img>
      </div>
      <div class="content" style="max-width: 600px; margin: 0 auto;">
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td style="width: 20px;">&nbsp;</td>
            <td class="container" style="display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;">

                <div class="content" style="max-width: 600px; margin: 0 auto;">

                    <!-- START TABLE TAQ HERE -->
                    <table role="presentation" class="main" style="width: 100%; border-collapse: collapse;">

                        <!-- START MAIN CONTENT AREA -->
                        <tr>
                            <td class="wrapper" style="padding: 30px;">

                                <table role="presentation" border="0" cellpadding="0" cellspacing="0" style="width: 100%; border-collapse: collapse;">
                                    <tr>
                                        <td>
                                            <h1 style="margin-top: 68px;">Email Verification</h1>
                                            <p style="margin-top: 14px;">Dear Mr/Mrs Alexa,</p>
                                            <p>Your email alexa@gmail.com needs verification.<br/>Please enter this code to verify your email</p>
                                            <p style="padding-bottom:32px;"></p>
                                            <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-mike" style="width: 100%; border-collapse: collapse;">
                                                <tbody>
                                                    <tr>
                                                        <td align="center">
                                                            <table role="presentation" border="0" cellpadding="0" cellspacing="0" style="padding-bottom:32px;">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="text-align: center;"><a href="#" target="_blank" class="btn" style="display: inline-block; background-color: #E0CB90; color: #151515; padding: 10px 20px; border-radius: 0px; width: 260px; height:auto; text-decoration: none;">Verify Email</a></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p>Regards,<br/>Indonesia MIKE Award</p>
                                        </td>
                                    </tr>
                                </table>

                            </td>
                        </tr>
                        <!-- END MAIN CONTENT AREA -->

                    </table>

                </div>

            </td>
            <td style="width: 20px;">&nbsp;</td>
        </tr>
    </table>
    <div class="footer" style="padding-bottom:0px";>
      <p style="padding-top:24px;">Follow us</p>
      <div id="sosmed-flex">
        <a id="sosmed-item" style="width:17px;" href=#><img src="https://indonesiamikeaward.com/wp-content/themes/binus-2023-299-mikeaward/images/email/icon-instagram.svg" alt="instagram"></img></a>
        <a id="sosmed-item" style="width:17px;" href=#><img  src="https://indonesiamikeaward.com/wp-content/themes/binus-2023-299-mikeaward/images/email/icon-facebook.svg" alt="facebook"></img></a>
        <a id="sosmed-item" style="width:17px;" href=#><img src="https://indonesiamikeaward.com/wp-content/themes/binus-2023-299-mikeaward/images/email/icon-twitter.svg" alt="twitter"></img></a>
        <a id="sosmed-item" style="width:17px;" href=#><img src="https://indonesiamikeaward.com/wp-content/themes/binus-2023-299-mikeaward/images/email/icon-youtube.svg"></img></a>
      </div>
      <p>&copy; Indonesia MIKE Award 2023</p>
    </div>
</div>
  </body>
</html>
