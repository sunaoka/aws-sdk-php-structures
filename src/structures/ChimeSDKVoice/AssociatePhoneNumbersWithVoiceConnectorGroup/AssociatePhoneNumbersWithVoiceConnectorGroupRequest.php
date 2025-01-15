<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\AssociatePhoneNumbersWithVoiceConnectorGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorGroupId
 * @property list<string> $E164PhoneNumbers
 * @property bool|null $ForceAssociate
 */
class AssociatePhoneNumbersWithVoiceConnectorGroupRequest extends Request
{
    /**
     * @param array{
     *     VoiceConnectorGroupId: string,
     *     E164PhoneNumbers: list<string>,
     *     ForceAssociate?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
