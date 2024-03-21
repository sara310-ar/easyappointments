<html lang="en">
<head>
    <title><?= lang('appointment_cancelled_title') ?> | <?= $company_name ?></title>
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
        <img src="<?= base_url('assets/img/logo-company.png') ?>" class="logo">
    </div>

    <div id="content" style="padding: 10px 15px;">
        <h2><?= lang('appointment_cancelled_title') ?></h2>
        <p><?= lang('appointment_removed_from_schedule') ?></p>

        <h2><?= lang('appointment_details_title') ?></h2>
        <table id="appointment-details">
            <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?= lang('service') ?></td>
                <td style="padding: 3px;"><?= $appointment_service ?></td>
            </tr>
            <!-- 
                <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?= lang('provider') ?></td>
                <td style="padding: 3px;"><?= $appointment_provider ?></td>
            </tr>
             -->
            <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?= lang('date') ?></td>
                <td style="padding: 3px;"><?= $appointment_date ?></td>
            </tr>
            <!-- 
                <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?= lang('duration') ?></td>
                <td style="padding: 3px;"><?= $appointment_duration ?></td>
            </tr>
            <tr>
                <td class="label" style="padding: 3px;font-weight: bold;"><?= lang('timezone') ?></td>
                <td style="padding: 3px;"><?= $appointment_timezone ?></td>
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

        <h2><?= lang('reason') ?></h2>
        <p><?= $reason ?></p>
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
