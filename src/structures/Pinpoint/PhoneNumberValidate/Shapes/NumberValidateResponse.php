<?php

namespace Sunaoka\Aws\Structures\Pinpoint\PhoneNumberValidate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Carrier
 * @property string|null $City
 * @property string|null $CleansedPhoneNumberE164
 * @property string|null $CleansedPhoneNumberNational
 * @property string|null $Country
 * @property string|null $CountryCodeIso2
 * @property string|null $CountryCodeNumeric
 * @property string|null $County
 * @property string|null $OriginalCountryCodeIso2
 * @property string|null $OriginalPhoneNumber
 * @property string|null $PhoneType
 * @property int|null $PhoneTypeCode
 * @property string|null $Timezone
 * @property string|null $ZipCode
 */
class NumberValidateResponse extends Shape
{
    /**
     * @param array{
     *     Carrier?: string|null,
     *     City?: string|null,
     *     CleansedPhoneNumberE164?: string|null,
     *     CleansedPhoneNumberNational?: string|null,
     *     Country?: string|null,
     *     CountryCodeIso2?: string|null,
     *     CountryCodeNumeric?: string|null,
     *     County?: string|null,
     *     OriginalCountryCodeIso2?: string|null,
     *     OriginalPhoneNumber?: string|null,
     *     PhoneType?: string|null,
     *     PhoneTypeCode?: int|null,
     *     Timezone?: string|null,
     *     ZipCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
