<?php

namespace Sunaoka\Aws\Structures\Chime\ListSupportedPhoneNumberCountries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CountryCode
 * @property list<'Local'|'TollFree'> $SupportedPhoneNumberTypes
 */
class PhoneNumberCountry extends Shape
{
    /**
     * @param array{
     *     CountryCode?: string,
     *     SupportedPhoneNumberTypes?: list<'Local'|'TollFree'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
