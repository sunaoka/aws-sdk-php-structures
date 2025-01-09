<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\AssociatePhoneNumbersWithVoiceConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 * @property list<string> $E164PhoneNumbers
 * @property bool $ForceAssociate
 */
class AssociatePhoneNumbersWithVoiceConnectorRequest extends Request
{
    /**
     * @param array{
     *     VoiceConnectorId: string,
     *     E164PhoneNumbers: list<string>,
     *     ForceAssociate?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
