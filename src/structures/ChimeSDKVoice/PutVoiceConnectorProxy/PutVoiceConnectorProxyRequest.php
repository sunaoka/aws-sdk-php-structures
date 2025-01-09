<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\PutVoiceConnectorProxy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 * @property int $DefaultSessionExpiryMinutes
 * @property list<string> $PhoneNumberPoolCountries
 * @property string $FallBackPhoneNumber
 * @property bool $Disabled
 */
class PutVoiceConnectorProxyRequest extends Request
{
    /**
     * @param array{
     *     VoiceConnectorId: string,
     *     DefaultSessionExpiryMinutes: int,
     *     PhoneNumberPoolCountries: list<string>,
     *     FallBackPhoneNumber?: string,
     *     Disabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
