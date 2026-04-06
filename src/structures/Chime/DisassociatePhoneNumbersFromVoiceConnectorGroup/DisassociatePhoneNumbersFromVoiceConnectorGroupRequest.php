<?php

namespace Sunaoka\Aws\Structures\Chime\DisassociatePhoneNumbersFromVoiceConnectorGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorGroupId
 * @property list<string> $E164PhoneNumbers
 */
class DisassociatePhoneNumbersFromVoiceConnectorGroupRequest extends Request
{
    /**
     * @param array{
     *     VoiceConnectorGroupId: string,
     *     E164PhoneNumbers: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
