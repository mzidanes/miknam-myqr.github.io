<?php
$langid="en"; 
$langname = "English";
$language = "Language";

$_about = "About";
$_action = "Action";
$_active = "Active";
$_add = "Add";
$_add_router = "Add Router";
$_add_user = "Add User";
$_add_user_profile = "Add Profile";
$_admin = "Admin";
$_admin_settings = "Admin Settings";
$_all = "All";
$_auto_reload = "Auto load";
$_backup_interval = "Backup Interval";
$_bluetooth_ac = "Print BT Access Code";
$_board_name = "Board Name";
$_by_comment = "By Comment";
$_cancel = "Cancel";
$_character = "Character";
$_close = "Close";
$_comment = "Comment";
$_confirm = "Confirm";
$_connecting = "Connecting";
$_cpu_load = "CPU Load";
$_currency = "Currency";
$_dashboard = "Dashboard";
$_data_limit = "Data Limit";
$_date ="Date";
$_date_print ="Date Print";
$_days = "days";
$_delete_data = "Delete data";
$_delete = "Delete";
$_dhcp_leases = "DHCP Leases";
$_dns_name = "DNS Name";
$_edit = "Edit";
$_edit_user = "Edit User";
$_email_backup = "Email Backup";
$_end = "End";
$_expired = "Expired";
$_expired_mode = "Expired Mode";
$_format_file_name = "Format file name";
$_free_hdd = "Free HDD";
$_free_memory = "Free Memory";
$_from = "From";
$_generate_code = "Generate Code";
$_generate = "Generate";
$_generate_user = "Generate User";
$_grace_period = "Grace Period";
$_help = "Help";
$_hosts = "Hosts";
$_hotspot_active = "Hotspot Active";
$_hotspot_cookies = "Cookies";
$_hotspot_log = "Hotspot Log";
$_hotspot_name = "Hotspot Name";
$_hotspot_users = "Hotspot User";
$_hours = "hours";
$_inactive = "Inactive";
$_income = "Income";
$_income_this_month = "Income This Month";
$_interface = "Interface";
$_ip_bindings = "IP Bindings";
$_last_generate = "Last Generate";
$_last_month_income = "Last Month Income";
$_list_logo = "List Logo";
$_live_report = "Live Report";
$_loading = "Loading";
$_loading_interface = "Loading Interface";
$_loading_theme = "Loading theme";
$_lock_user = "Lock User";
$_log = "Log";
$_logout = "Logout";
$_messages = "Messages";
$_minutes = "minutes";
$_model = "Model";
$_month = "Month";
$_name = "Name";
$_no = "No";
$_open = "Open";
$_package = "Package";
$_password = "Password";
$_period = "Period";
$_please_login = "Please Login";
$_ppp_active = "PPP Active";
$_ppp_profiles = "PPP Profiles";
$_ppp_secrets = "PPP Secrets";
$_prefix = "Prefix";
$_price = "Price";
$_print_default = "Default";
$_print = "Print";
$_print_pdf = "Print PDF";
$_print_qr = "QR";
$_print_small = "Small";
$_processing = "Processing...";
$_profile = "Profile";
$_qty = "Qty";
$_quick_print = "Quick Print";
$_random = "Random";
$_readme = "Read Me";
$_reboot = "Are you sure to reboot";
$_recap_activation = "Recapitulation Activation";
$_income_recap = "Income Recapitulation";
$_income_recap_rev = "Income Revision";
$_remove = "Remove";
$_report = "Report";
$_resume = "Resume";
$_router_list = "Router List";
$_sales_report_data = "Sales Report Data";
$_save = "Save";
$_search = "Search";
$_sec = "sec";
$_seconds = "seconds";
$_selected = "Selected";
$_select_interface = "Select Interface";
$_selling_report = "Selling Report";
$_send_to = "Send To";
$_session_name = "Session Name";
$_session = "Session";
$_session_settings = "Session Settings";
$_settings = "Settings";
$_share = "Share";
$_show_all = "Show All";
$_shutdown = "Are you sure to shutdown";
$_sold_voucher = "Sold Voucher";
$_start = "Start";
$_system_date_time = "System date & time";
$_system_off = "Shutdown";
$_system_reboot = "Reboot";
$_system_scheduler = "Scheduler";
$_system = "System";
$_telegram_report = "Telegram Report";
$_template_editor = "Template Editor";
$_theme = "Theme";
$_this_month = "This month";
$_time_limit = "Time Limit";
$_time = "Time";
$_today = "Today";
$_tools = "Tools";
$_total = "Total";
$_total_income = "Total Income";
$_traffic_interface = "Traffic Interface";
$_traffic_monitor = "Traffic Monitor";
$_traffic = "Traffic";
$_upload = "Upload";
$_upload_logo = "Upload Logo";
$_uptime = "Uptime";
$_uptime_user = "Uptime";
$_user_length = "Name Length";
$_user_list = "User List";
$_user_log = "User Log";
$_user_mode = "User Mode";
$_user_name = "Username";
$_user_pass = "Username & Password";
$_user_profile_list = "Profile List";
$_user_profile = "User Profile";
$_users = "Users";
$_user_user = "Username = Password";
$_validity = "Validity";
$_voucher_code ="Voucher Code";
$_vouchers = "Vouchers";
$_yes = "Yes";





//details
$_format_time_limit = '
    Format '.$_time_limit.'.<br>
    [wdhm] Example : 30d = 30'.$_days.', 12h = 12'.$_hours.', 4w3d = 31'.$_days.'.
';
$_details_add_user = '
    '.$_add_user.' with '.$_time_limit.'.<br>
    Should '.$_time_limit.' < '.$_validity.'.
';

$_details_user_profile = '
'.$_expired_mode.' is the control for the hotspot user.<br>
Options : Remove, Notice, Remove & Record, Notice & Record.
<ul>
<li>Remove: User will be deleted when the grace period expires.</li>
<li>Notice: User will not deleted and get notification after user expiration.</li>
<li>Record: Save the price of each user login. To calculate total sales of hotspot users.</li>
</ul>
</p>
        <p>'.$_grace_period.' : Grace period before user deleted.</p>
        <p>'.$_lock_user.' : Username can only be used on 1 device only.</p>
';

$_format_validity_grace_period = '
Format '.$_validity.' & '.$_grace_period.'<br>
[wdhm] Example : 30d = 30'.$_days.', 12h = 12'.$_hours.', 4w3d = 31'.$_days.'.
';

$_format_ip_binding = '
    Format Upload/Download Max Limit<br>
    [k / M] Contoh : 512k, 1500k, 1M<br><br>
    Format '.$_validity.'<br>
    [d] Example: 30d = 30'.$_days.'.<br>
';

$_help_report = '
<ul>
<li>Click CSV to download.</li>
<li>For filters per month, select Day and month, then click Filter.<br>
	<img width="70%" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAATUAAAAsCAYAAAAEsS/jAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAOlSURBVHhe7d09TtxAGMbxnCYSKOJDCggtqZIqHCRVpFwDiYJj0MARIq2i5QQUW6RH0CJST/x6bM/YM7Z38cfi1//iJ2F7PCvGfp+ZYQs+nH+7MACgBaEGQBVCDYAqhBoAVQg1AKoQagBUaQy1xdfv0fMA8F7VhtrBycLsH382Hz8dYgf2jxh74C2ioXZ4ujB7SVEdn33BjuQPKHYNmJtt6iEINdlyygrt+Ow8aIzxEGqA0ynUBMW0e4Qa4BBqChBqgEOoKUCoAQ6hpgChBjiEmgKEGuAQagoQaoBDqClAqAHOiKF2bZZP/8zLa+jhNtYem+oUardr8/J0by5j14AJGj3UggC7ujePBFsnhBrg7D7UhBTW69rc5MdZ0LnV3LNZXtlrN+vkeH3n3W/7fVxde+em7ffyj/e7W3Iu1lb0GmoNY2+vrc1y9eyue/deyvlSQN6Zh6SNe+bhat09N2nr9f3016yD51rtD3MwZD0MF2rpy5oVT7ByywohL5ZoAHrHCvz4+St4iHIu1lb0FmptY58HXjGp2JDJg6c51LK+vAkpbV+Epm0bXPf7Y1U5S0PWw4Ch1nSt+nKXZ+v0WmnlpoM/OzXNSqK3UIsojX0aat7KLeGvnIMQqjyrQKm/SNvK58lnaVqRY3ND1cPIoZbN3DmvWPyXW36uLZoJ82enpllJ9B9qNWPfU6il9xT9N4Ra6b2Qn8ufjfkYqh7G2X56BVW7rSkKUdrq2nr6ZEZqm5VEf6HWMvYdQ60Is2h/5ba5tE/pX9qW+sbcDFEP43xREFk5xIslKYZV0lbh1jMnM1LbrCS2eYhFSOTn/PFuG/tOoZY9M3+ltUGo2Tb2CwS2nvM2RD0ME2rpS+ud9wOuOPZm90w+60dDcma2eYjV8fVDqXXsW0LNtnfX05ArnlE1tOxx8/ZT2Pem9C0s0GD0UEuLpCR8WYttipCCqhRLqlqAM7ZVqCWC8W265o99W6hV7n9c3ZUnsjwkU9KPDTK7AqsLtdgKEKg3Yqj1TArE30bN2LahNjUSamw9sanJhpqsCGKz+hzpDjVZ4YereaDO9EIt+xscqzRHbahl21VWadjG9EINAbWhBrwBoaYAoQY4hJoChBrgEGoKEGqA0ynU3D8zjt+AcRBqgNMp1MTBycLsHfFf2neJUAOczqEmDk8X6Yot7wzj2k8mldh5AM1qQ03IVjR2HgDeq8ZQA4CpIdQAqEKoAVCFUAOgCqEGQBVCDYAiF+Y/bd3pxgv3MhEAAAAASUVORK5CYII=">
	</li>
	<li>For filters based on '.$_prefix.', fill '.$_prefix.' in the search input, then click filter.</li>
		        <li>It is recommended to delete the sales report after download  the CSV report.</li>
	</ul>
';

$_delete_report = '
<ul>
		        <li>Deleting the Selling Report will delete the User Log as well. </li>
		        <li>It is recommended to download '.$_user_log.' first. </li>
		      </ul>
';

$_email_details = '
  <div class="card">
    <div class="card-header">
      <h3><i class="fa fa-book"></i> ReadMe</h3>
    </div>
    <div class="card-body">
      <table>
        <tr>
          <td colspan="2">
            <ul>
              <li><i>Server</i> : Fill in the email IP address that will be used<br>Example :<br>GMail = smtp.gmail.com<br></li><br>
              <li><i>Port</i> : Port Email<br>Example :<br>GMail = 587 -> TLS: Yes<br></li><br>
              <li><i>Start-TLS</i> : Security email that is used, whether using TLS or not</li><br>
              <li><i>'.$_from.'</i> : Your name or email address</li><br>
              <li><i>'.$_users.'</i> : Email address that will be used</li><br>
              <li><i>'.$_password.'</i> : Email password that will be used</li><br>
              <li><i>'.$_send_to.'</i> : The destination email address used for backup configuration <i>(can use the same email)</i></li><br>
              <li><i>'.$_backup_interval.'</i> : Configuration backup time interval<br>
              Example: 30d = 30 days, 12h = 12 hours, 10m = 10 minutes
              </li>
            </ul>
          </td>
        </tr>
      </table>
    </div>
  </div>
';

$_telegram_details = '
  <div class="card">
    <div class="card-header">
      <h3 class="card-title"><i class="fa fa-book"></i> Readme</h3>
    </div>
    <div class="card-body">
      <table class="table">
        <tr>
            <td>
              <p><b>Telegram Bot</b> is a feature that can be used to monitor the activity of a user hotspot when logging in.<br></p>
              <ul>
                <li>To make Telegram Bot please make it at <i>@botfather</i> Telegram.</li>
                <li>To use this feature, make sure to fill out the <i style="color: green;">Token bot</i> dan <i style="color: red;">Chat id</i> forms, and activate the <i>Income Recapitulation</i> feature in the Reports menu.</li>
                </ul>
                <p><b>Income Recapitulation</b> is a feature that can be used to record income for 1 year.<br></p>
                <ul>
                  <li>To use this feature, make sure to activate in the <i>Reports</i> menu.</li>
                </ul>
            </td>
          </tr>
      </table>
    </div>
  </div>
';

$_income_recap_rev_report = "Are you sure ?";