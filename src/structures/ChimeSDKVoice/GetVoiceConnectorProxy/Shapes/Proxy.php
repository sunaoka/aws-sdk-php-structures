<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetVoiceConnectorProxy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DefaultSessionExpiryMinutes
 * @property bool $Disabled
 * @property string $FallBackPhoneNumber
 * @property list<string> $PhoneNumberCountries
 */
class Proxy extends Shape
{
    /**
     * @param array{
     *     DefaultSessionExpiryMinutes?: int,
     *     Disabled?: bool,
     *     FallBackPhoneNumber?: string,
     *     PhoneNumberCountries?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
