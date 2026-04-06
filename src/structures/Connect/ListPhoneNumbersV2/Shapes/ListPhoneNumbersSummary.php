<?php

namespace Sunaoka\Aws\Structures\Connect\ListPhoneNumbersV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PhoneNumberId
 * @property string|null $PhoneNumberArn
 * @property string|null $PhoneNumber
 * @property 'AF'|'AL'|'DZ'|'AS'|'AD'|'AO'|'AI'|'AQ'|'AG'|'AR'|'AM'|'AW'|'AU'|'AT'|'AZ'|'BS'|'BH'|'BD'|'BB'|'BY'|'BE'|'BZ'|'BJ'|'BM'|'BT'|'BO'|'BA'|'BW'|'BR'|'IO'|'VG'|'BN'|'BG'|'BF'|'BI'|'KH'|'CM'|'CA'|'CV'|'KY'|'CF'|'TD'|'CL'|'CN'|'CX'|'CC'|'CO'|'KM'|'CK'|'CR'|'HR'|'CU'|'CW'|'CY'|'CZ'|'CD'|'DK'|'DJ'|'DM'|'DO'|'TL'|'EC'|'EG'|'SV'|'GQ'|'ER'|'EE'|'ET'|'FK'|'FO'|'FJ'|'FI'|'FR'|'PF'|'GA'|'GM'|'GE'|'DE'|'GH'|'GI'|'GR'|'GL'|'GD'|'GU'|'GT'|'GG'|'GN'|'GW'|'GY'|'HT'|'HN'|'HK'|'HU'|'IS'|'IN'|'ID'|'IR'|'IQ'|'IE'|'IM'|'IL'|'IT'|'CI'|'JM'|'JP'|'JE'|'JO'|'KZ'|'KE'|'KI'|'KW'|'KG'|'LA'|'LV'|'LB'|'LS'|'LR'|'LY'|'LI'|'LT'|'LU'|'MO'|'MK'|'MG'|'MW'|'MY'|'MV'|'ML'|'MT'|'MH'|'MR'|'MU'|'YT'|'MX'|'FM'|'MD'|'MC'|'MN'|'ME'|'MS'|'MA'|'MZ'|'MM'|'NA'|'NR'|'NP'|'NL'|'AN'|'NC'|'NZ'|'NI'|'NE'|'NG'|'NU'|'KP'|'MP'|'NO'|'OM'|'PK'|'PW'|'PA'|'PG'|'PY'|'PE'|'PH'|'PN'|'PL'|'PT'|'PR'|'QA'|'CG'|'RE'|'RO'|'RU'|'RW'|'BL'|'SH'|'KN'|'LC'|'MF'|'PM'|'VC'|'WS'|'SM'|'ST'|'SA'|'SN'|'RS'|'SC'|'SL'|'SG'|'SX'|'SK'|'SI'|'SB'|'SO'|'ZA'|'KR'|'ES'|'LK'|'SD'|'SR'|'SJ'|'SZ'|'SE'|'CH'|'SY'|'TW'|'TJ'|'TZ'|'TH'|'TG'|'TK'|'TO'|'TT'|'TN'|'TR'|'TM'|'TC'|'TV'|'VI'|'UG'|'UA'|'AE'|'GB'|'US'|'UY'|'UZ'|'VU'|'VA'|'VE'|'VN'|'WF'|'EH'|'YE'|'ZM'|'ZW'|null $PhoneNumberCountryCode
 * @property 'TOLL_FREE'|'DID'|'UIFN'|'SHARED'|'THIRD_PARTY_TF'|'THIRD_PARTY_DID'|'SHORT_CODE'|null $PhoneNumberType
 * @property string|null $TargetArn
 * @property string|null $InstanceId
 * @property string|null $PhoneNumberDescription
 * @property string|null $SourcePhoneNumberArn
 */
class ListPhoneNumbersSummary extends Shape
{
    /**
     * @param array{
     *     PhoneNumberId?: string|null,
     *     PhoneNumberArn?: string|null,
     *     PhoneNumber?: string|null,
     *     PhoneNumberCountryCode?: 'AF'|'AL'|'DZ'|'AS'|'AD'|'AO'|'AI'|'AQ'|'AG'|'AR'|'AM'|'AW'|'AU'|'AT'|'AZ'|'BS'|'BH'|'BD'|'BB'|'BY'|'BE'|'BZ'|'BJ'|'BM'|'BT'|'BO'|'BA'|'BW'|'BR'|'IO'|'VG'|'BN'|'BG'|'BF'|'BI'|'KH'|'CM'|'CA'|'CV'|'KY'|'CF'|'TD'|'CL'|'CN'|'CX'|'CC'|'CO'|'KM'|'CK'|'CR'|'HR'|'CU'|'CW'|'CY'|'CZ'|'CD'|'DK'|'DJ'|'DM'|'DO'|'TL'|'EC'|'EG'|'SV'|'GQ'|'ER'|'EE'|'ET'|'FK'|'FO'|'FJ'|'FI'|'FR'|'PF'|'GA'|'GM'|'GE'|'DE'|'GH'|'GI'|'GR'|'GL'|'GD'|'GU'|'GT'|'GG'|'GN'|'GW'|'GY'|'HT'|'HN'|'HK'|'HU'|'IS'|'IN'|'ID'|'IR'|'IQ'|'IE'|'IM'|'IL'|'IT'|'CI'|'JM'|'JP'|'JE'|'JO'|'KZ'|'KE'|'KI'|'KW'|'KG'|'LA'|'LV'|'LB'|'LS'|'LR'|'LY'|'LI'|'LT'|'LU'|'MO'|'MK'|'MG'|'MW'|'MY'|'MV'|'ML'|'MT'|'MH'|'MR'|'MU'|'YT'|'MX'|'FM'|'MD'|'MC'|'MN'|'ME'|'MS'|'MA'|'MZ'|'MM'|'NA'|'NR'|'NP'|'NL'|'AN'|'NC'|'NZ'|'NI'|'NE'|'NG'|'NU'|'KP'|'MP'|'NO'|'OM'|'PK'|'PW'|'PA'|'PG'|'PY'|'PE'|'PH'|'PN'|'PL'|'PT'|'PR'|'QA'|'CG'|'RE'|'RO'|'RU'|'RW'|'BL'|'SH'|'KN'|'LC'|'MF'|'PM'|'VC'|'WS'|'SM'|'ST'|'SA'|'SN'|'RS'|'SC'|'SL'|'SG'|'SX'|'SK'|'SI'|'SB'|'SO'|'ZA'|'KR'|'ES'|'LK'|'SD'|'SR'|'SJ'|'SZ'|'SE'|'CH'|'SY'|'TW'|'TJ'|'TZ'|'TH'|'TG'|'TK'|'TO'|'TT'|'TN'|'TR'|'TM'|'TC'|'TV'|'VI'|'UG'|'UA'|'AE'|'GB'|'US'|'UY'|'UZ'|'VU'|'VA'|'VE'|'VN'|'WF'|'EH'|'YE'|'ZM'|'ZW'|null,
     *     PhoneNumberType?: 'TOLL_FREE'|'DID'|'UIFN'|'SHARED'|'THIRD_PARTY_TF'|'THIRD_PARTY_DID'|'SHORT_CODE'|null,
     *     TargetArn?: string|null,
     *     InstanceId?: string|null,
     *     PhoneNumberDescription?: string|null,
     *     SourcePhoneNumberArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
