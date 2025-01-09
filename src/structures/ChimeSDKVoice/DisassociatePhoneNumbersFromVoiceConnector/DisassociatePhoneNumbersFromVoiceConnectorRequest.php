<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\DisassociatePhoneNumbersFromVoiceConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 * @property list<string> $E164PhoneNumbers
 */
class DisassociatePhoneNumbersFromVoiceConnectorRequest extends Request
{
    /**
     * @param array{
     *     VoiceConnectorId: string,
     *     E164PhoneNumbers: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
