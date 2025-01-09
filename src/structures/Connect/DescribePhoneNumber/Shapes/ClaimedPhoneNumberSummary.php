<?php

namespace Sunaoka\Aws\Structures\Connect\DescribePhoneNumber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PhoneNumberId
 * @property string $PhoneNumberArn
 * @property string $PhoneNumber
 * @property 'AF'|'AL'|'DZ'|'AS'|'AD'|'AO'|'AI'|'AQ'|'AG'|'AR'|'AM'|'AW'|'AU'|'AT'|'AZ'|'BS'|'BH'|'BD'|'BB'|'BY'|'BE'|'BZ'|'BJ'|'BM'|'BT'|'BO'|'BA'|'BW'|'BR'|'IO'|'VG'|'BN'|'BG'|'BF'|'BI'|'KH'|'CM'|'CA'|'CV'|'KY'|'CF'|'TD'|'CL'|'CN'|'CX'|'CC'|'CO'|'KM'|'CK'|'CR'|'HR'|'CU'|'CW'|'CY'|'CZ'|'CD'|'DK'|'DJ'|'DM'|'DO'|'TL'|'EC'|'EG'|'SV'|'GQ'|'ER'|'EE'|'ET'|'FK'|'FO'|'FJ'|'FI'|'FR'|'PF'|'GA'|'GM'|'GE'|'DE'|'GH'|'GI'|'GR'|'GL'|'GD'|'GU'|'GT'|'GG'|'GN'|'GW'|'GY'|'HT'|'HN'|'HK'|'HU'|'IS'|'IN'|'ID'|'IR'|'IQ'|'IE'|'IM'|'IL'|'IT'|'CI'|'JM'|'JP'|'JE'|'JO'|'KZ'|'KE'|'KI'|'KW'|'KG'|'LA'|'LV'|'LB'|'LS'|'LR'|'LY'|'LI'|'LT'|'LU'|'MO'|'MK'|'MG'|'MW'|'MY'|'MV'|'ML'|'MT'|'MH'|'MR'|'MU'|'YT'|'MX'|'FM'|'MD'|'MC'|'MN'|'ME'|'MS'|'MA'|'MZ'|'MM'|'NA'|'NR'|'NP'|'NL'|'AN'|'NC'|'NZ'|'NI'|'NE'|'NG'|'NU'|'KP'|'MP'|'NO'|'OM'|'PK'|'PW'|'PA'|'PG'|'PY'|'PE'|'PH'|'PN'|'PL'|'PT'|'PR'|'QA'|'CG'|'RE'|'RO'|'RU'|'RW'|'BL'|'SH'|'KN'|'LC'|'MF'|'PM'|'VC'|'WS'|'SM'|'ST'|'SA'|'SN'|'RS'|'SC'|'SL'|'SG'|'SX'|'SK'|'SI'|'SB'|'SO'|'ZA'|'KR'|'ES'|'LK'|'SD'|'SR'|'SJ'|'SZ'|'SE'|'CH'|'SY'|'TW'|'TJ'|'TZ'|'TH'|'TG'|'TK'|'TO'|'TT'|'TN'|'TR'|'TM'|'TC'|'TV'|'VI'|'UG'|'UA'|'AE'|'GB'|'US'|'UY'|'UZ'|'VU'|'VA'|'VE'|'VN'|'WF'|'EH'|'YE'|'ZM'|'ZW' $PhoneNumberCountryCode
 * @property 'TOLL_FREE'|'DID'|'UIFN'|'SHARED'|'THIRD_PARTY_TF'|'THIRD_PARTY_DID'|'SHORT_CODE' $PhoneNumberType
 * @property string $PhoneNumberDescription
 * @property string $TargetArn
 * @property string $InstanceId
 * @property array<string, string> $Tags
 * @property PhoneNumberStatus $PhoneNumberStatus
 * @property string $SourcePhoneNumberArn
 */
class ClaimedPhoneNumberSummary extends Shape
{
    /**
     * @param array{
     *     PhoneNumberId?: string,
     *     PhoneNumberArn?: string,
     *     PhoneNumber?: string,
     *     PhoneNumberCountryCode?: 'AF'|'AL'|'DZ'|'AS'|'AD'|'AO'|'AI'|'AQ'|'AG'|'AR'|'AM'|'AW'|'AU'|'AT'|'AZ'|'BS'|'BH'|'BD'|'BB'|'BY'|'BE'|'BZ'|'BJ'|'BM'|'BT'|'BO'|'BA'|'BW'|'BR'|'IO'|'VG'|'BN'|'BG'|'BF'|'BI'|'KH'|'CM'|'CA'|'CV'|'KY'|'CF'|'TD'|'CL'|'CN'|'CX'|'CC'|'CO'|'KM'|'CK'|'CR'|'HR'|'CU'|'CW'|'CY'|'CZ'|'CD'|'DK'|'DJ'|'DM'|'DO'|'TL'|'EC'|'EG'|'SV'|'GQ'|'ER'|'EE'|'ET'|'FK'|'FO'|'FJ'|'FI'|'FR'|'PF'|'GA'|'GM'|'GE'|'DE'|'GH'|'GI'|'GR'|'GL'|'GD'|'GU'|'GT'|'GG'|'GN'|'GW'|'GY'|'HT'|'HN'|'HK'|'HU'|'IS'|'IN'|'ID'|'IR'|'IQ'|'IE'|'IM'|'IL'|'IT'|'CI'|'JM'|'JP'|'JE'|'JO'|'KZ'|'KE'|'KI'|'KW'|'KG'|'LA'|'LV'|'LB'|'LS'|'LR'|'LY'|'LI'|'LT'|'LU'|'MO'|'MK'|'MG'|'MW'|'MY'|'MV'|'ML'|'MT'|'MH'|'MR'|'MU'|'YT'|'MX'|'FM'|'MD'|'MC'|'MN'|'ME'|'MS'|'MA'|'MZ'|'MM'|'NA'|'NR'|'NP'|'NL'|'AN'|'NC'|'NZ'|'NI'|'NE'|'NG'|'NU'|'KP'|'MP'|'NO'|'OM'|'PK'|'PW'|'PA'|'PG'|'PY'|'PE'|'PH'|'PN'|'PL'|'PT'|'PR'|'QA'|'CG'|'RE'|'RO'|'RU'|'RW'|'BL'|'SH'|'KN'|'LC'|'MF'|'PM'|'VC'|'WS'|'SM'|'ST'|'SA'|'SN'|'RS'|'SC'|'SL'|'SG'|'SX'|'SK'|'SI'|'SB'|'SO'|'ZA'|'KR'|'ES'|'LK'|'SD'|'SR'|'SJ'|'SZ'|'SE'|'CH'|'SY'|'TW'|'TJ'|'TZ'|'TH'|'TG'|'TK'|'TO'|'TT'|'TN'|'TR'|'TM'|'TC'|'TV'|'VI'|'UG'|'UA'|'AE'|'GB'|'US'|'UY'|'UZ'|'VU'|'VA'|'VE'|'VN'|'WF'|'EH'|'YE'|'ZM'|'ZW',
     *     PhoneNumberType?: 'TOLL_FREE'|'DID'|'UIFN'|'SHARED'|'THIRD_PARTY_TF'|'THIRD_PARTY_DID'|'SHORT_CODE',
     *     PhoneNumberDescription?: string,
     *     TargetArn?: string,
     *     InstanceId?: string,
     *     Tags?: array<string, string>,
     *     PhoneNumberStatus?: PhoneNumberStatus,
     *     SourcePhoneNumberArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
