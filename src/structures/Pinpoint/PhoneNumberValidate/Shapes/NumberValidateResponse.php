<?php

namespace Sunaoka\Aws\Structures\Pinpoint\PhoneNumberValidate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Carrier
 * @property string $City
 * @property string $CleansedPhoneNumberE164
 * @property string $CleansedPhoneNumberNational
 * @property string $Country
 * @property string $CountryCodeIso2
 * @property string $CountryCodeNumeric
 * @property string $County
 * @property string $OriginalCountryCodeIso2
 * @property string $OriginalPhoneNumber
 * @property string $PhoneType
 * @property int $PhoneTypeCode
 * @property string $Timezone
 * @property string $ZipCode
 */
class NumberValidateResponse extends Shape
{
    /**
     * @param array{
     *     Carrier?: string,
     *     City?: string,
     *     CleansedPhoneNumberE164?: string,
     *     CleansedPhoneNumberNational?: string,
     *     Country?: string,
     *     CountryCodeIso2?: string,
     *     CountryCodeNumeric?: string,
     *     County?: string,
     *     OriginalCountryCodeIso2?: string,
     *     OriginalPhoneNumber?: string,
     *     PhoneType?: string,
     *     PhoneTypeCode?: int,
     *     Timezone?: string,
     *     ZipCode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
