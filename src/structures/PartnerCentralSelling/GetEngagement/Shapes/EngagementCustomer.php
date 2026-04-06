<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetEngagement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CompanyName
 * @property 'US'|'AF'|'AX'|'AL'|'DZ'|'AS'|'AD'|'AO'|'AI'|'AQ'|'AG'|'AR'|'AM'|'AW'|'AU'|'AT'|'AZ'|'BS'|'BH'|'BD'|'BB'|'BY'|'BE'|'BZ'|'BJ'|'BM'|'BT'|'BO'|'BQ'|'BA'|'BW'|'BV'|'BR'|'IO'|'BN'|'BG'|'BF'|'BI'|'KH'|'CM'|'CA'|'CV'|'KY'|'CF'|'TD'|'CL'|'CN'|'CX'|'CC'|'CO'|'KM'|'CG'|'CK'|'CR'|'CI'|'HR'|'CU'|'CW'|'CY'|'CZ'|'CD'|'DK'|'DJ'|'DM'|'DO'|'EC'|'EG'|'SV'|'GQ'|'ER'|'EE'|'ET'|'FK'|'FO'|'FJ'|'FI'|'FR'|'GF'|'PF'|'TF'|'GA'|'GM'|'GE'|'DE'|'GH'|'GI'|'GR'|'GL'|'GD'|'GP'|'GU'|'GT'|'GG'|'GN'|'GW'|'GY'|'HT'|'HM'|'VA'|'HN'|'HK'|'HU'|'IS'|'IN'|'ID'|'IR'|'IQ'|'IE'|'IM'|'IL'|'IT'|'JM'|'JP'|'JE'|'JO'|'KZ'|'KE'|'KI'|'KR'|'KW'|'KG'|'LA'|'LV'|'LB'|'LS'|'LR'|'LY'|'LI'|'LT'|'LU'|'MO'|'MK'|'MG'|'MW'|'MY'|'MV'|'ML'|'MT'|'MH'|'MQ'|'MR'|'MU'|'YT'|'MX'|'FM'|'MD'|'MC'|'MN'|'ME'|'MS'|'MA'|'MZ'|'MM'|'NA'|'NR'|'NP'|'NL'|'AN'|'NC'|'NZ'|'NI'|'NE'|'NG'|'NU'|'NF'|'MP'|'NO'|'OM'|'PK'|'PW'|'PS'|'PA'|'PG'|'PY'|'PE'|'PH'|'PN'|'PL'|'PT'|'PR'|'QA'|'RE'|'RO'|'RU'|'RW'|'BL'|'SH'|'KN'|'LC'|'MF'|'PM'|'VC'|'WS'|'SM'|'ST'|'SA'|'SN'|'RS'|'SC'|'SL'|'SG'|'SX'|'SK'|'SI'|'SB'|'SO'|'ZA'|'GS'|'SS'|'ES'|'LK'|'SD'|'SR'|'SJ'|'SZ'|'SE'|'CH'|'SY'|'TW'|'TJ'|'TZ'|'TH'|'TL'|'TG'|'TK'|'TO'|'TT'|'TN'|'TR'|'TM'|'TC'|'TV'|'UG'|'UA'|'AE'|'GB'|'UM'|'UY'|'UZ'|'VU'|'VE'|'VN'|'VG'|'VI'|'WF'|'EH'|'YE'|'ZM'|'ZW' $CountryCode
 * @property 'Aerospace'|'Agriculture'|'Automotive'|'Computers and Electronics'|'Consumer Goods'|'Education'|'Energy - Oil and Gas'|'Energy - Power and Utilities'|'Financial Services'|'Gaming'|'Government'|'Healthcare'|'Hospitality'|'Life Sciences'|'Manufacturing'|'Marketing and Advertising'|'Media and Entertainment'|'Mining'|'Non-Profit Organization'|'Professional Services'|'Real Estate and Construction'|'Retail'|'Software and Internet'|'Telecommunications'|'Transportation and Logistics'|'Travel'|'Wholesale and Distribution'|'Other' $Industry
 * @property string $WebsiteUrl
 */
class EngagementCustomer extends Shape
{
    /**
     * @param array{
     *     CompanyName: string,
     *     CountryCode: 'US'|'AF'|'AX'|'AL'|'DZ'|'AS'|'AD'|'AO'|'AI'|'AQ'|'AG'|'AR'|'AM'|'AW'|'AU'|'AT'|'AZ'|'BS'|'BH'|'BD'|'BB'|'BY'|'BE'|'BZ'|'BJ'|'BM'|'BT'|'BO'|'BQ'|'BA'|'BW'|'BV'|'BR'|'IO'|'BN'|'BG'|'BF'|'BI'|'KH'|'CM'|'CA'|'CV'|'KY'|'CF'|'TD'|'CL'|'CN'|'CX'|'CC'|'CO'|'KM'|'CG'|'CK'|'CR'|'CI'|'HR'|'CU'|'CW'|'CY'|'CZ'|'CD'|'DK'|'DJ'|'DM'|'DO'|'EC'|'EG'|'SV'|'GQ'|'ER'|'EE'|'ET'|'FK'|'FO'|'FJ'|'FI'|'FR'|'GF'|'PF'|'TF'|'GA'|'GM'|'GE'|'DE'|'GH'|'GI'|'GR'|'GL'|'GD'|'GP'|'GU'|'GT'|'GG'|'GN'|'GW'|'GY'|'HT'|'HM'|'VA'|'HN'|'HK'|'HU'|'IS'|'IN'|'ID'|'IR'|'IQ'|'IE'|'IM'|'IL'|'IT'|'JM'|'JP'|'JE'|'JO'|'KZ'|'KE'|'KI'|'KR'|'KW'|'KG'|'LA'|'LV'|'LB'|'LS'|'LR'|'LY'|'LI'|'LT'|'LU'|'MO'|'MK'|'MG'|'MW'|'MY'|'MV'|'ML'|'MT'|'MH'|'MQ'|'MR'|'MU'|'YT'|'MX'|'FM'|'MD'|'MC'|'MN'|'ME'|'MS'|'MA'|'MZ'|'MM'|'NA'|'NR'|'NP'|'NL'|'AN'|'NC'|'NZ'|'NI'|'NE'|'NG'|'NU'|'NF'|'MP'|'NO'|'OM'|'PK'|'PW'|'PS'|'PA'|'PG'|'PY'|'PE'|'PH'|'PN'|'PL'|'PT'|'PR'|'QA'|'RE'|'RO'|'RU'|'RW'|'BL'|'SH'|'KN'|'LC'|'MF'|'PM'|'VC'|'WS'|'SM'|'ST'|'SA'|'SN'|'RS'|'SC'|'SL'|'SG'|'SX'|'SK'|'SI'|'SB'|'SO'|'ZA'|'GS'|'SS'|'ES'|'LK'|'SD'|'SR'|'SJ'|'SZ'|'SE'|'CH'|'SY'|'TW'|'TJ'|'TZ'|'TH'|'TL'|'TG'|'TK'|'TO'|'TT'|'TN'|'TR'|'TM'|'TC'|'TV'|'UG'|'UA'|'AE'|'GB'|'UM'|'UY'|'UZ'|'VU'|'VE'|'VN'|'VG'|'VI'|'WF'|'EH'|'YE'|'ZM'|'ZW',
     *     Industry: 'Aerospace'|'Agriculture'|'Automotive'|'Computers and Electronics'|'Consumer Goods'|'Education'|'Energy - Oil and Gas'|'Energy - Power and Utilities'|'Financial Services'|'Gaming'|'Government'|'Healthcare'|'Hospitality'|'Life Sciences'|'Manufacturing'|'Marketing and Advertising'|'Media and Entertainment'|'Mining'|'Non-Profit Organization'|'Professional Services'|'Real Estate and Construction'|'Retail'|'Software and Internet'|'Telecommunications'|'Transportation and Logistics'|'Travel'|'Wholesale and Distribution'|'Other',
     *     WebsiteUrl: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
