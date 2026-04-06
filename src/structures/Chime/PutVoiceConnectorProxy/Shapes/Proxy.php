<?php

namespace Sunaoka\Aws\Structures\Chime\PutVoiceConnectorProxy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $DefaultSessionExpiryMinutes
 * @property bool|null $Disabled
 * @property string|null $FallBackPhoneNumber
 * @property list<string>|null $PhoneNumberCountries
 */
class Proxy extends Shape
{
    /**
     * @param array{
     *     DefaultSessionExpiryMinutes?: int|null,
     *     Disabled?: bool|null,
     *     FallBackPhoneNumber?: string|null,
     *     PhoneNumberCountries?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
