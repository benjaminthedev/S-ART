<?php
/**
 * Template Name: Two Column Contact Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<?php if( get_field('parallax_image') ): ?>
	<div class="parallax" id="clicked-para" style="background-image: url(<?php the_field('parallax_image'); ?>);"></div>
<?php endif; ?>

<div class="wrapper" id="page-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">
			

        <div class="col-md-6">
            <?php
                if( have_rows('left_content') ):
                    // loop through the rows of data
                    while ( have_rows('left_content') ) : the_row();
                        if( get_row_layout() == 'left_content' ):?>
                            <h2><?php the_sub_field('heading');?></h2>
                        <?php the_sub_field('content_left');
                        endif;
                    endwhile;
                else :
                endif;
            ?>
        </div>

        <div class="col-md-6">
      
<section class="newsletter-sp">
            <!-- Begin Mailchimp Signup Form -->







<div id="mc_embed_signup">

<form action="https://exhibitiononscreen.us5.list-manage.com/subscribe/post?u=1849bcc73e0c7ff60b94ce1db&amp;id=e4a837ea02" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

    <div id="mc_embed_signup_scroll">

          

<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>

<div class="mc-field-group">

          <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>

</label>

          <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">

</div>

<div class="mc-field-group">

          <label for="mce-FNAME">First Name  <span class="asterisk">*</span>

</label>

          <input type="text" value="" name="FNAME" class="required" id="mce-FNAME">

</div>

<div class="mc-field-group">

          <label for="mce-LNAME">Last Name  </span>

</label>

          <input type="text" value="" name="LNAME" id="mce-LNAME">

</div>

<div class="mc-field-group">

          <label for="mce-MMERGE3">Gender  <span class="asterisk">*</span>

</label>

          <select name="MMERGE3" class="required" id="mce-MMERGE3">

          <option value=""></option>

          <option value="Male">Male</option>

          <option value="Female">Female</option>

          <option value="Other">Other</option>

          <option value="None">Prefer Not To Say</option>

 

          </select>

</div>

<div class="mc-field-group">

          <label for="mce-MMERGE8">City/State  <span class="asterisk">*</span>

</label>

          <input type="text" value="" name="MMERGE8" class="required" id="mce-MMERGE8">

</div>

<div class="mc-field-group">

          <label for="mce-MMERGE4">Country  <span class="asterisk">*</span>

</label>

          <select name="MMERGE4" class="required" id="mce-MMERGE4">

          <option value=""></option>

          <option value="Select">Select</option>

<option value="United Kingdom">United Kingdom</option>

<option value="United States of America">United States of America</option>

<option value="Aaland Islands">Aaland Islands</option>

<option value="Afghanistan">Afghanistan</option>

<option value="Albania">Albania</option>

<option value="Algeria">Algeria</option>

<option value="American Samoa">American Samoa</option>

<option value="Andorra">Andorra</option>

<option value="Angola">Angola</option>

<option value="Anguilla">Anguilla</option>

<option value="Antarctica">Antarctica</option>

<option value="Antigua And Barbuda">Antigua And Barbuda</option>

<option value="Argentina">Argentina</option>

<option value="Armenia">Armenia</option>

<option value="Aruba">Aruba</option>

<option value="Australia">Australia</option>

<option value="Austria">Austria</option>

<option value="Azerbaijan">Azerbaijan</option>

<option value="Bahamas">Bahamas</option>

<option value="Bahrain">Bahrain</option>

<option value="Bangladesh">Bangladesh</option>

<option value="Barbados">Barbados</option>

<option value="Belarus">Belarus</option>

<option value="Belgium">Belgium</option>

<option value="Belize">Belize</option>

<option value="Benin">Benin</option>

<option value="Bermuda">Bermuda</option>

<option value="Bhutan">Bhutan</option>

<option value="Bolivia">Bolivia</option>

<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>

<option value="Botswana">Botswana</option>

<option value="Bouvet Island">Bouvet Island</option>

<option value="Brazil">Brazil</option>

<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>

<option value="Brunei Darussalam">Brunei Darussalam</option>

<option value="Bulgaria">Bulgaria</option>

<option value="Burkina Faso">Burkina Faso</option>

<option value="Burundi">Burundi</option>

<option value="Cambodia">Cambodia</option>

<option value="Cameroon">Cameroon</option>

<option value="Canada">Canada</option>

<option value="Cape Verde">Cape Verde</option>

<option value="Cayman Islands">Cayman Islands</option>

<option value="Central African Republic">Central African Republic</option>

<option value="Chad">Chad</option>

<option value="Chile">Chile</option>

<option value="China">China</option>

<option value="Christmas Island">Christmas Island</option>

<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>

<option value="Colombia">Colombia</option>

<option value="Comoros">Comoros</option>

<option value="Congo">Congo</option>

<option value="Cook Islands">Cook Islands</option>

<option value="Costa Rica">Costa Rica</option>

<option value="Cote D'Ivoire">Cote D'Ivoire</option>

<option value="Croatia">Croatia</option>

<option value="Cuba">Cuba</option>

<option value="Curacao">Curacao</option>

<option value="Cyprus">Cyprus</option>

<option value="Czech Republic">Czech Republic</option>

<option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>

<option value="Denmark">Denmark</option>

<option value="Djibouti">Djibouti</option>

<option value="Dominica">Dominica</option>

<option value="Dominican Republic">Dominican Republic</option>

<option value="East Timor">East Timor</option>

<option value="Ecuador">Ecuador</option>

<option value="Egypt">Egypt</option>

<option value="El Salvador">El Salvador</option>

<option value="Equatorial Guinea">Equatorial Guinea</option>

<option value="Eritrea">Eritrea</option>

<option value="Estonia">Estonia</option>

<option value="Ethiopia">Ethiopia</option>

<option value="Falkland Islands">Falkland Islands</option>

<option value="Faroe Islands">Faroe Islands</option>

<option value="Fiji">Fiji</option>

<option value="Finland">Finland</option>

<option value="France">France</option>

<option value="French Guiana">French Guiana</option>

<option value="French Polynesia">French Polynesia</option>

<option value="French Southern Territories">French Southern Territories</option>

<option value="Gabon">Gabon</option>

<option value="Gambia">Gambia</option>

<option value="Georgia">Georgia</option>

<option value="Germany">Germany</option>

<option value="Ghana">Ghana</option>

<option value="Gibraltar">Gibraltar</option>

<option value="Greece">Greece</option>

<option value="Greenland">Greenland</option>

<option value="Grenada">Grenada</option>

<option value="Guadeloupe">Guadeloupe</option>

<option value="Guam">Guam</option>

<option value="Guatemala">Guatemala</option>

<option value="Guernsey">Guernsey</option>

<option value="Guinea">Guinea</option>

<option value="Guinea-Bissau">Guinea-Bissau</option>

<option value="Guyana">Guyana</option>

<option value="Haiti">Haiti</option>

<option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>

<option value="Honduras">Honduras</option>

<option value="Hong Kong">Hong Kong</option>

<option value="Hungary">Hungary</option>

<option value="Iceland">Iceland</option>

<option value="India">India</option>

<option value="Indonesia">Indonesia</option>

<option value="Iran">Iran</option>

<option value="Iraq">Iraq</option>

<option value="Ireland">Ireland</option>

<option value="Isle of Man">Isle of Man</option>

<option value="Israel">Israel</option>

<option value="Italy">Italy</option>

<option value="Jamaica">Jamaica</option>

<option value="Japan">Japan</option>

<option value="Jersey  (Channel Islands)">Jersey  (Channel Islands)</option>

<option value="Jordan">Jordan</option>

<option value="Kazakhstan">Kazakhstan</option>

<option value="Kenya">Kenya</option>

<option value="Kiribati">Kiribati</option>

<option value="Kuwait">Kuwait</option>

<option value="Kyrgyzstan">Kyrgyzstan</option>

<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>

<option value="Latvia">Latvia</option>

<option value="Lebanon">Lebanon</option>

<option value="Lesotho">Lesotho</option>

<option value="Liberia">Liberia</option>

<option value="Libya">Libya</option>

<option value="Liechtenstein">Liechtenstein</option>

<option value="Lithuania">Lithuania</option>

<option value="Luxembourg">Luxembourg</option>

<option value="Macau">Macau</option>

<option value="Macedonia">Macedonia</option>

<option value="Madagascar">Madagascar</option>

<option value="Malawi">Malawi</option>

<option value="Malaysia">Malaysia</option>

<option value="Maldives">Maldives</option>

<option value="Mali">Mali</option>

<option value="Malta">Malta</option>

<option value="Marshall Islands">Marshall Islands</option>

<option value="Martinique">Martinique</option>

<option value="Mauritania">Mauritania</option>

<option value="Mauritius">Mauritius</option>

<option value="Mayotte">Mayotte</option>

<option value="Mexico">Mexico</option>

<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>

<option value="Moldova, Republic of">Moldova, Republic of</option>

<option value="Monaco">Monaco</option>

<option value="Mongolia">Mongolia</option>

<option value="Montenegro">Montenegro</option>

<option value="Montserrat">Montserrat</option>

<option value="Morocco">Morocco</option>

<option value="Mozambique">Mozambique</option>

<option value="Myanmar">Myanmar</option>

<option value="Namibia">Namibia</option>

<option value="Nauru">Nauru</option>

<option value="Nepal">Nepal</option>

<option value="Netherlands">Netherlands</option>

<option value="Netherlands Antilles">Netherlands Antilles</option>

<option value="New Caledonia">New Caledonia</option>

<option value="New Zealand">New Zealand</option>

<option value="Nicaragua">Nicaragua</option>

<option value="Niger">Niger</option>

<option value="Nigeria">Nigeria</option>

<option value="Niue">Niue</option>

<option value="Norfolk Island">Norfolk Island</option>

<option value="North Korea">North Korea</option>

<option value="Northern Mariana Islands">Northern Mariana Islands</option>

<option value="Norway">Norway</option>

<option value="Oman">Oman</option>

<option value="Pakistan">Pakistan</option>

<option value="Palau">Palau</option>

<option value="Palestine">Palestine</option>

<option value="Panama">Panama</option>

<option value="Papua New Guinea">Papua New Guinea</option>

<option value="Paraguay">Paraguay</option>

<option value="Peru">Peru</option>

<option value="Philippines">Philippines</option>

<option value="Pitcairn">Pitcairn</option>

<option value="Poland">Poland</option>

<option value="Portugal">Portugal</option>

<option value="Puerto Rico">Puerto Rico</option>

<option value="Qatar">Qatar</option>

<option value="Republic of Kosovo">Republic of Kosovo</option>

<option value="Reunion">Reunion</option>

<option value="Romania">Romania</option>

<option value="Russia">Russia</option>

<option value="Rwanda">Rwanda</option>

<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>

<option value="Saint Lucia">Saint Lucia</option>

<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>

<option value="Samoa (Independent)">Samoa (Independent)</option>

<option value="San Marino">San Marino</option>

<option value="Sao Tome and Principe">Sao Tome and Principe</option>

<option value="Saudi Arabia">Saudi Arabia</option>

<option value="Senegal">Senegal</option>

<option value="Serbia">Serbia</option>

<option value="Seychelles">Seychelles</option>

<option value="Sierra Leone">Sierra Leone</option>

<option value="Singapore">Singapore</option>

<option value="Sint Maarten">Sint Maarten</option>

<option value="Slovakia">Slovakia</option>

<option value="Slovenia">Slovenia</option>

<option value="Solomon Islands">Solomon Islands</option>

<option value="Somalia">Somalia</option>

<option value="South Africa">South Africa</option>

<option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>

<option value="South Korea">South Korea</option>

<option value="South Sudan">South Sudan</option>

<option value="Spain">Spain</option>

<option value="Sri Lanka">Sri Lanka</option>

<option value="St. Helena">St. Helena</option>

<option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>

<option value="Sudan">Sudan</option>

<option value="Suriname">Suriname</option>

<option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>

<option value="Swaziland">Swaziland</option>

<option value="Sweden">Sweden</option>

<option value="Switzerland">Switzerland</option>

<option value="Syria">Syria</option>

<option value="Taiwan">Taiwan</option>

<option value="Tajikistan">Tajikistan</option>

<option value="Tanzania">Tanzania</option>

<option value="Thailand">Thailand</option>

<option value="Togo">Togo</option>

<option value="Tokelau">Tokelau</option>

<option value="Tonga">Tonga</option>

<option value="Trinidad and Tobago">Trinidad and Tobago</option>

<option value="Tunisia">Tunisia</option>

<option value="Turkey">Turkey</option>

<option value="Turkmenistan">Turkmenistan</option>

<option value="Turks &amp; Caicos Islands">Turks &amp; Caicos Islands</option>

<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>

<option value="Tuvalu">Tuvalu</option>

<option value="Uganda">Uganda</option>

<option value="Ukraine">Ukraine</option>

<option value="United Arab Emirates">United Arab Emirates</option>

<option value="Uruguay">Uruguay</option>

<option value="USA Minor Outlying Islands">USA Minor Outlying Islands</option>

<option value="Uzbekistan">Uzbekistan</option>

<option value="Vanuatu">Vanuatu</option>

<option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>

<option value="Venezuela">Venezuela</option>

<option value="Vietnam">Vietnam</option>

<option value="Virgin Islands (British)">Virgin Islands (British)</option>

<option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>

<option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>

<option value="Western Sahara">Western Sahara</option>

<option value="Yemen">Yemen</option>

<option value="Zambia">Zambia</option>

<option value="Zimbabwe">Zimbabwe</option>

 

          </select>

</div>

<div class="mc-field-group input-group">

    <strong>I wish to receive (please tick) </strong>

    <ul><li><input type="checkbox" value="1" name="group[15603][1]" id="mce-group[15603]-15603-0"><label for="mce-group[15603]-15603-0">Updates about release dates, film screenings and tv airings</label></li>

<li><input type="checkbox" value="2" name="group[15603][2]" id="mce-group[15603]-15603-1"><label for="mce-group[15603]-15603-1">Offers and discounts</label></li>

<li><input type="checkbox" value="4" name="group[15603][4]" id="mce-group[15603]-15603-2"><label for="mce-group[15603]-15603-2">Newsletters and other content</label></li>

</ul>

</div>

<div id="mergeRow-gdpr" class="mergeRow gdpr-mergeRow content__gdprBlock mc-field-group">

    <div class="content__gdpr">

        <label>Marketing Permissions</label>

        <p>Seventh Art Productions will use the information you provide on this form to be in touch with you and to provide screening and release information as well as news and offers from EXHIBITION ON SCREEN and Seventh Art Productions. Please let us know all the ways you would like to hear from us:</p>

        <fieldset class="mc_fieldset gdprRequired mc-field-group" name="interestgroup_field">

                   <label class="checkbox subfield" for="gdpr_1"><input type="checkbox" id="gdpr_1" name="gdpr[1]" value="Y" class="av-checkbox "><span>Email</span> </label>

        </fieldset>

        <p>You can change your mind at any time by clicking the unsubscribe link in the footer of any email you receive from us, or by contacting us at info@seventh-art.com. We will treat your information with respect. For more information about our privacy practices please visit our website: https://exhibitiononscreen.com/privacy . By clicking below, you agree that we may process your information in accordance with these terms.</p>

    </div>

    <div class="content__gdprLegal">

        <p>We use Mailchimp as our marketing platform. By clicking below to subscribe, you acknowledge that your information will be transferred to Mailchimp for processing. <a href="https://mailchimp.com/legal/" target="_blank">Learn more about Mailchimp's privacy practices here.</a></p>

    </div>

</div>

          <div id="mce-responses" class="clear">

                   <div class="response" id="mce-error-response" style="display:none"></div>

                   <div class="response" id="mce-success-response" style="display:none"></div>

          </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_1849bcc73e0c7ff60b94ce1db_e4a837ea02" tabindex="-1" value=""></div>

    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>

    </div>

</form>

</div>

<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='MMERGE3';ftypes[3]='dropdown';fnames[8]='MMERGE8';ftypes[8]='text';fnames[4]='MMERGE4';ftypes[4]='dropdown';}(jQuery));var $mcj = jQuery.noConflict(true);</script>

<!--End mc_embed_signup-->
</section>
        </div>







			


		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
