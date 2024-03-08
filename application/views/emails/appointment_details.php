<html lang="en">
<head>
    <title><?= lang('appointment_details_title') ?> | <?= $company_name ?></title>
    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <style>
        :root{
            --primary-color : #3690fa;
            --primary-color-dark: #005792;
            --secondary-color: #bbebfd;
            --white: #fff;
        }
        .email-container{
            border: 1px solid #eee;
        }
        #header{
            background-color: var(--secondary-color);
            height: 65px;
            padding: 10px 15px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .logo{
            height:50px;
        }
        .email-content{
            display: flex;
            justify-content: space-between;
            flex-direction: row;
            flex-wrap: wrap;
        }
         h2{
            color: var(--primary-color-dark);
        }
        p{
            font-size: 18px;
        }
        .info{
            color: rgb(105, 102, 102);
        }
        iframe{
            width: 100%;
            height: 250px;
        }
        .link-mail{
            color: var(--primary-color);
            display: block;
            line-height: 2;
            text-decoration: none;
            font-size: 15px;
        }
        #edit{
            color: green;
        }
        #cancel{
            color: red;
        }
    </style>
</head>
<body style="font: 13px arial, helvetica, tahoma;">
<div class="email-container">
    <div id="header">
        <img src="<?= base_url('assets/img/logo.webp') ?>" class="logo">
    </div>

    <div id="content" style="padding: 10px 15px;">
        <h2><?= $email_title ?></h2>
        <p><?= $email_message ?></p>

        <h2><?= lang('appointment_details_title') ?></h2>
        <table id="appointment-details">
            <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?= lang('service') ?></td>
                <td class="info" style="padding: 3px;"><?= $appointment_service ?></td>
            </tr>

            <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?= lang('date') ?></td>
                <td class="info" style="padding: 3px;"><?= $appointment_start_date ?></td>
            </tr>
        </table>

        <h2><?= lang('customer_details_title') ?></h2>
        <table id="customer-details">
            <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?= lang('name') ?></td>
                <td class="info" style="padding: 3px;"><?= $customer_name ?></td>
            </tr>
            <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?= lang('email') ?></td>
                <td class="info" style="padding: 3px;"><?= $customer_email ?></td>
            </tr>
            <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?= lang('phone_number') ?></td>
                <td class="info" style="padding: 3px;"><?= $customer_phone ?></td>
            </tr>
            <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?= lang('address') ?></td>
                <td class="info" style="padding: 3px;"><?= $customer_address ?></td>
            </tr>
            <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?= lang('city') ?></td>
                <td class="info" style="padding: 3px;"><?= $appointment_city['name'] ?></td>
            </tr>
            <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?= lang('location') ?></td>
                <td class="info" style="padding: 3px;"><?= $appointment_location['name'] ?></td>
            </tr>
        </table>

        <h2><?= lang('appointment_link_title') ?></h2>
<a href="<?= $appointment_link ?>">
  <button style="padding: 5px 10px; border: 1px solid red; background-color: red; color: white; cursor: pointer; width: 200px; border-radius: 5px; font-size: 14px;">
    <i class="fa-solid fa-link"></i> <?= lang('edit_or_cancel') ?>
  </button>
</a>




        
    </div>
    <div id="content" style="padding: 10px 15px;">
    <!-- TODO info company bdd -->
        <h2><?= lang('company_information_title') ?></h2>
        <table id="appointment-details">
            <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?= lang('address') ?></td>
                <td class="info" style="padding: 3px;"><?= $company_address ?></td>
            </tr>
            <tr>
                <td  class="label" style="padding: 3px;font-weight: bold;"><?= lang('phone_number') ?></td>
                <td class="info" style="padding: 3px;"><?= $company_phone ?></td>
            </tr>
            <tr>
                <td  class="label" style="padding: 3px;font-weight: bold;"><?= lang('email') ?></td>
                <td class="info" style="padding: 3px;"><?= $company_email ?></td>
            </tr>
            
            <td class="label" style="padding: 3px; font-weight: bold;"><?= lang('map_position')?></td>
<td class="info" style="padding: 3px;">
    <button style="padding: 5px 10px; border: 1px solid #ccc; background-color: #f5f5f5; cursor: pointer; border-radius: 5px;">
        <a href="<?= $company_position ?>" style="text-decoration: none; color: #333; font-weight: bold;">
            Google Maps
        </a>
    </button>
</td>

            
  
        </table>

    </div>
    <div id="footer" style="padding: 10px; text-align: center; margin-top: 10px;
                border-top: 1px solid #EEE; background: #FAFAFA;">
        Powered by
        <a href="https://developily.com/" style="color: #005792; text-decoration: none;" target="_blank">Developily</a>
        |
        <a href="<?= $company_link ?>" style="color: #005792; text-decoration: none;"><?= $company_name ?></a>
    </div>
</div>
</body>
</html>
