<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\PutVoiceConnectorProxy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 * @property int $DefaultSessionExpiryMinutes
 * @property list<string> $PhoneNumberPoolCountries
 * @property string|null $FallBackPhoneNumber
 * @property bool|null $Disabled
 */
class PutVoiceConnectorProxyRequest extends Request
{
    /**
     * @param array{
     *     VoiceConnectorId: string,
     *     DefaultSessionExpiryMinutes: int,
     *     PhoneNumberPoolCountries: list<string>,
     *     FallBackPhoneNumber?: string|null,
     *     Disabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
