<?php

namespace Sunaoka\Aws\Structures\Chime\AssociatePhoneNumbersWithVoiceConnectorGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorGroupId
 * @property list<string> $E164PhoneNumbers
 * @property bool $ForceAssociate
 */
class AssociatePhoneNumbersWithVoiceConnectorGroupRequest extends Request
{
    /**
     * @param array{
     *     VoiceConnectorGroupId: string,
     *     E164PhoneNumbers: list<string>,
     *     ForceAssociate?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
