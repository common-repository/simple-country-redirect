<?php 

add_action( 'init', function() {

	$titan = TitanFramework::getInstance( 'simple_country_redirect' );

	$panel = $titan->createAdminPanel( array(
		'id' => $titan->optionNamespace,
		'name' => 'Redirect Countries',
		'parent' => 'options-general.php',
	) );

	$tab1 = $panel->createTab( array(
		'name' => 'Basic Options',
	) );

	$tab1->createOption( array(
		'name' => 'Redirected Countries',
		'id' => 'redirected_countries',
		'type' => 'select',
		'multiple' => true,
		'options' => [ 'AF' => __( 'Afghanistan' ), 'AX' => __( '&#197;land Islands' ), 'AL' => __( 'Albania' ), 'DZ' => __( 'Algeria' ), 'AS' => __( 'American Samoa' ), 'AD' => __( 'Andorra' ), 'AO' => __( 'Angola' ), 'AI' => __( 'Anguilla' ), 'AQ' => __( 'Antarctica' ), 'AG' => __( 'Antigua and Barbuda' ), 'AR' => __( 'Argentina' ), 'AM' => __( 'Armenia' ), 'AW' => __( 'Aruba' ), 'AU' => __( 'Australia' ), 'AT' => __( 'Austria' ), 'AZ' => __( 'Azerbaijan' ), 'BS' => __( 'Bahamas' ), 'BH' => __( 'Bahrain' ), 'BD' => __( 'Bangladesh' ), 'BB' => __( 'Barbados' ), 'BY' => __( 'Belarus' ), 'BE' => __( 'Belgium' ), 'PW' => __( 'Belau' ), 'BZ' => __( 'Belize' ), 'BJ' => __( 'Benin' ), 'BM' => __( 'Bermuda' ), 'BT' => __( 'Bhutan' ), 'BO' => __( 'Bolivia' ), 'BQ' => __( 'Bonaire, Saint Eustatius and Saba' ), 'BA' => __( 'Bosnia and Herzegovina' ), 'BW' => __( 'Botswana' ), 'BV' => __( 'Bouvet Island' ), 'BR' => __( 'Brazil' ), 'IO' => __( 'British Indian Ocean Territory' ), 'VG' => __( 'British Virgin Islands' ), 'BN' => __( 'Brunei' ), 'BG' => __( 'Bulgaria' ), 'BF' => __( 'Burkina Faso' ), 'BI' => __( 'Burundi' ), 'KH' => __( 'Cambodia' ), 'CM' => __( 'Cameroon' ), 'CA' => __( 'Canada' ), 'CV' => __( 'Cape Verde' ), 'KY' => __( 'Cayman Islands' ), 'CF' => __( 'Central African Republic' ), 'TD' => __( 'Chad' ), 'CL' => __( 'Chile' ), 'CN' => __( 'China' ), 'CX' => __( 'Christmas Island' ), 'CC' => __( 'Cocos (Keeling) Islands' ), 'CO' => __( 'Colombia' ), 'KM' => __( 'Comoros' ), 'CG' => __( 'Congo (Brazzaville)' ), 'CD' => __( 'Congo (Kinshasa)' ), 'CK' => __( 'Cook Islands' ), 'CR' => __( 'Costa Rica' ), 'HR' => __( 'Croatia' ), 'CU' => __( 'Cuba' ), 'CW' => __( 'Cura&ccedil;ao' ), 'CY' => __( 'Cyprus' ), 'CZ' => __( 'Czech Republic' ), 'DK' => __( 'Denmark' ), 'DJ' => __( 'Djibouti' ), 'DM' => __( 'Dominica' ), 'DO' => __( 'Dominican Republic' ), 'EC' => __( 'Ecuador' ), 'EG' => __( 'Egypt' ), 'SV' => __( 'El Salvador' ), 'GQ' => __( 'Equatorial Guinea' ), 'ER' => __( 'Eritrea' ), 'EE' => __( 'Estonia' ), 'ET' => __( 'Ethiopia' ), 'FK' => __( 'Falkland Islands' ), 'FO' => __( 'Faroe Islands' ), 'FJ' => __( 'Fiji' ), 'FI' => __( 'Finland' ), 'FR' => __( 'France' ), 'GF' => __( 'French Guiana' ), 'PF' => __( 'French Polynesia' ), 'TF' => __( 'French Southern Territories' ), 'GA' => __( 'Gabon' ), 'GM' => __( 'Gambia' ), 'GE' => __( 'Georgia' ), 'DE' => __( 'Germany' ), 'GH' => __( 'Ghana' ), 'GI' => __( 'Gibraltar' ), 'GR' => __( 'Greece' ), 'GL' => __( 'Greenland' ), 'GD' => __( 'Grenada' ), 'GP' => __( 'Guadeloupe' ), 'GU' => __( 'Guam' ), 'GT' => __( 'Guatemala' ), 'GG' => __( 'Guernsey' ), 'GN' => __( 'Guinea' ), 'GW' => __( 'Guinea-Bissau' ), 'GY' => __( 'Guyana' ), 'HT' => __( 'Haiti' ), 'HM' => __( 'Heard Island and McDonald Islands' ), 'HN' => __( 'Honduras' ), 'HK' => __( 'Hong Kong' ), 'HU' => __( 'Hungary' ), 'IS' => __( 'Iceland' ), 'IN' => __( 'India' ), 'ID' => __( 'Indonesia' ), 'IR' => __( 'Iran' ), 'IQ' => __( 'Iraq' ), 'IE' => __( 'Republic of Ireland' ), 'IM' => __( 'Isle of Man' ), 'IL' => __( 'Israel' ), 'IT' => __( 'Italy' ), 'CI' => __( 'Ivory Coast' ), 'JM' => __( 'Jamaica' ), 'JP' => __( 'Japan' ), 'JE' => __( 'Jersey' ), 'JO' => __( 'Jordan' ), 'KZ' => __( 'Kazakhstan' ), 'KE' => __( 'Kenya' ), 'KI' => __( 'Kiribati' ), 'KW' => __( 'Kuwait' ), 'KG' => __( 'Kyrgyzstan' ), 'LA' => __( 'Laos' ), 'LV' => __( 'Latvia' ), 'LB' => __( 'Lebanon' ), 'LS' => __( 'Lesotho' ), 'LR' => __( 'Liberia' ), 'LY' => __( 'Libya' ), 'LI' => __( 'Liechtenstein' ), 'LT' => __( 'Lithuania' ), 'LU' => __( 'Luxembourg' ), 'MO' => __( 'Macao S.A.R., China' ), 'MK' => __( 'Macedonia' ), 'MG' => __( 'Madagascar' ), 'MW' => __( 'Malawi' ), 'MY' => __( 'Malaysia' ), 'MV' => __( 'Maldives' ), 'ML' => __( 'Mali' ), 'MT' => __( 'Malta' ), 'MH' => __( 'Marshall Islands' ), 'MQ' => __( 'Martinique' ), 'MR' => __( 'Mauritania' ), 'MU' => __( 'Mauritius' ), 'YT' => __( 'Mayotte' ), 'MX' => __( 'Mexico' ), 'FM' => __( 'Micronesia' ), 'MD' => __( 'Moldova' ), 'MC' => __( 'Monaco' ), 'MN' => __( 'Mongolia' ), 'ME' => __( 'Montenegro' ), 'MS' => __( 'Montserrat' ), 'MA' => __( 'Morocco' ), 'MZ' => __( 'Mozambique' ), 'MM' => __( 'Myanmar' ), 'NA' => __( 'Namibia' ), 'NR' => __( 'Nauru' ), 'NP' => __( 'Nepal' ), 'NL' => __( 'Netherlands' ), 'NC' => __( 'New Caledonia' ), 'NZ' => __( 'New Zealand' ), 'NI' => __( 'Nicaragua' ), 'NE' => __( 'Niger' ), 'NG' => __( 'Nigeria' ), 'NU' => __( 'Niue' ), 'NF' => __( 'Norfolk Island' ), 'MP' => __( 'Northern Mariana Islands' ), 'KP' => __( 'North Korea' ), 'NO' => __( 'Norway' ), 'OM' => __( 'Oman' ), 'PK' => __( 'Pakistan' ), 'PS' => __( 'Palestinian Territory' ), 'PA' => __( 'Panama' ), 'PG' => __( 'Papua New Guinea' ), 'PY' => __( 'Paraguay' ), 'PE' => __( 'Peru' ), 'PH' => __( 'Philippines' ), 'PN' => __( 'Pitcairn' ), 'PL' => __( 'Poland' ), 'PT' => __( 'Portugal' ), 'PR' => __( 'Puerto Rico' ), 'QA' => __( 'Qatar' ), 'RE' => __( 'Reunion' ), 'RO' => __( 'Romania' ), 'RU' => __( 'Russia' ), 'RW' => __( 'Rwanda' ), 'BL' => __( 'Saint Barth&eacute;lemy' ), 'SH' => __( 'Saint Helena' ), 'KN' => __( 'Saint Kitts and Nevis' ), 'LC' => __( 'Saint Lucia' ), 'MF' => __( 'Saint Martin (French part)' ), 'SX' => __( 'Saint Martin (Dutch part)' ), 'PM' => __( 'Saint Pierre and Miquelon' ), 'VC' => __( 'Saint Vincent and the Grenadines' ), 'SM' => __( 'San Marino' ), 'ST' => __( 'S&atilde;o Tom&eacute; and Pr&iacute;ncipe' ), 'SA' => __( 'Saudi Arabia' ), 'SN' => __( 'Senegal' ), 'RS' => __( 'Serbia' ), 'SC' => __( 'Seychelles' ), 'SL' => __( 'Sierra Leone' ), 'SG' => __( 'Singapore' ), 'SK' => __( 'Slovakia' ), 'SI' => __( 'Slovenia' ), 'SB' => __( 'Solomon Islands' ), 'SO' => __( 'Somalia' ), 'ZA' => __( 'South Africa' ), 'GS' => __( 'South Georgia/Sandwich Islands' ), 'KR' => __( 'South Korea' ), 'SS' => __( 'South Sudan' ), 'ES' => __( 'Spain' ), 'LK' => __( 'Sri Lanka' ), 'SD' => __( 'Sudan' ), 'SR' => __( 'Suriname' ), 'SJ' => __( 'Svalbard and Jan Mayen' ), 'SZ' => __( 'Swaziland' ), 'SE' => __( 'Sweden' ), 'CH' => __( 'Switzerland' ), 'SY' => __( 'Syria' ), 'TW' => __( 'Taiwan' ), 'TJ' => __( 'Tajikistan' ), 'TZ' => __( 'Tanzania' ), 'TH' => __( 'Thailand' ), 'TL' => __( 'Timor-Leste' ), 'TG' => __( 'Togo' ), 'TK' => __( 'Tokelau' ), 'TO' => __( 'Tonga' ), 'TT' => __( 'Trinidad and Tobago' ), 'TN' => __( 'Tunisia' ), 'TR' => __( 'Turkey' ), 'TM' => __( 'Turkmenistan' ), 'TC' => __( 'Turks and Caicos Islands' ), 'TV' => __( 'Tuvalu' ), 'UG' => __( 'Uganda' ), 'UA' => __( 'Ukraine' ), 'AE' => __( 'United Arab Emirates' ), 'GB' => __( 'United Kingdom (UK)' ), 'US' => __( 'United States (US)' ), 'UM' => __( 'United States (US) Minor Outlying Islands' ), 'VI' => __( 'United States (US) Virgin Islands' ), 'UY' => __( 'Uruguay' ), 'UZ' => __( 'Uzbekistan' ), 'VU' => __( 'Vanuatu' ), 'VA' => __( 'Vatican' ), 'VE' => __( 'Venezuela' ), 'VN' => __( 'Vietnam' ), 'WF' => __( 'Wallis and Futuna' ), 'EH' => __( 'Western Sahara' ), 'WS' => __( 'Samoa' ), 'YE' => __( 'Yemen' ), 'ZM' => __( 'Zambia' ), 'ZW' => __( 'Zimbabwe' ) ],
	) );

	$tab1->createOption( array(
		'name' => 'Redirection URL',
		'id' => 'redirect_to',
	) );

	$tab1->createOption( array(
		'type' => 'save',
		'use_reset' => false,
	) );

	$tab2 = $panel->createTab( array(
		'name' => 'Exclusions',
	) );

	$supported_post_types_names_array =  apply_filters( 'simple_country_redirect_post_types_array', [] );
	foreach ( $supported_post_types_names_array as $name ) {
		$tab2->createOption( array(
			'name' => $name[1],
			'id' => 'excluded_posts_' . $name[0],
			'type' => 'multicheck-posts',
			'post_type' => $name[0],
		) );
	}

	$tab2->createOption( array(
		'type' => 'save',
		'use_reset' => false,
	) );
}, 11 );

add_action( 'registered_post_type', function( $post_type ) {
	add_filter( 'simple_country_redirect_post_types_array', function( $names ) use ( $post_type ) {
		$post_type_object = get_post_type_object( $post_type );
		$name = [ $post_type, $post_type_object->labels->name ];
		if ( $post_type_object->public && ! in_array( $name, $names ) ) {
			$names[] = [ $post_type, $post_type_object->labels->name ];
		}
		return $names;
	} );
} );
