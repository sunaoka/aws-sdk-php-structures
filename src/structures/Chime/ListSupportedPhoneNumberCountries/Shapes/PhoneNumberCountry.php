<?php

namespace Sunaoka\Aws\Structures\Chime\ListSupportedPhoneNumberCountries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CountryCode
 * @property list<'Local'|'TollFree'>|null $SupportedPhoneNumberTypes
 */
class PhoneNumberCountry extends Shape
{
    /**
     * @param array{
     *     CountryCode?: string|null,
     *     SupportedPhoneNumberTypes?: list<'Local'|'TollFree'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
