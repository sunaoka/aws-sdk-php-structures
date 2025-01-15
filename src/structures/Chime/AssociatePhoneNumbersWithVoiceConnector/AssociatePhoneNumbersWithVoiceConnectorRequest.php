<?php

namespace Sunaoka\Aws\Structures\Chime\AssociatePhoneNumbersWithVoiceConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 * @property list<string> $E164PhoneNumbers
 * @property bool|null $ForceAssociate
 */
class AssociatePhoneNumbersWithVoiceConnectorRequest extends Request
{
    /**
     * @param array{
     *     VoiceConnectorId: string,
     *     E164PhoneNumbers: list<string>,
     *     ForceAssociate?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
