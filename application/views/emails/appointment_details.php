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
<!-- DONE -->
<div class="email-container">
    <div id="header">
        <img src="<?= base_url('assets/img/logo BIOALLIANCE.png') ?>" class="logo">
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
            <!-- 
                <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?= lang('provider') ?></td>
                <td class="info" style="padding: 3px;"><?= $appointment_provider ?></td>
                </tr>
             -->

            <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?= lang('date') ?></td>
                <!--TODO $appointment_date au lieu de  $appointment_start_date -->
                <td class="info" style="padding: 3px;"><?= $appointment_start_date ?></td>
            </tr>
           <!-- 
             <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?= lang('end') ?></td>
                <td class="info" style="padding: 3px;"><?= $appointment_end_date ?></td>
            </tr>
            -->
            <!-- 
                <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?= lang('timezone') ?></td>
                <td class="info" style="padding: 3px;"><?= $appointment_timezone ?></td>
            </tr>
             -->
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
        </table>

        <h2><?= lang('appointment_link_title') ?></h2>
        <a class="link-mail" href="<?= $appointment_link ?>" style="width: 600px;"><i class="fa-solid fa-link"></i> <?= $appointment_link ?></a>
        <a class="link-mail" id="edit" href=""><i class="fa-regular fa-pen-to-square"></i><?= lang('edit_appointment') ?></a>
        <a class="link-mail" id="cancel" href=""><i class="fa-solid fa-xmark"></i><?= lang('cancel_appointment') ?></a>
    </div>
    <div id="content" style="padding: 10px 15px;">
    <!-- TODO info company bdd -->
        <h2><?= lang('company_information_title') ?></h2>
        <table id="appointment-details">
            <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?= lang('address') ?><</td>
                <td class="info" style="padding: 3px;">Lotissement 233 N°155 Hai Khemisti Bir El Djir 31000 Oran, Algérie</td>
            </tr>
            <tr>
                <td  class="label" style="padding: 3px;font-weight: bold;"><?= lang('phone_number') ?></td>
                <td class="info" style="padding: 3px;">0550 71 71 50</td>
            </tr>
            <tr>
                <td  class="label" style="padding: 3px;font-weight: bold;"><?= lang('email') ?></td>
                <td class="info" style="padding: 3px;">contact@bioalliancelab.com</td>
            </tr> 
        </table>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12954.51278356765!2d-0.5740046!3d35.7353615!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7e6365ce0d4389%3A0xe320c8a52c4402b7!2sLaboratoire%20BIOALLIANCE!5e0!3m2!1sfr!2sdz!4v1707736491004!5m2!1sfr!2sdz" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
