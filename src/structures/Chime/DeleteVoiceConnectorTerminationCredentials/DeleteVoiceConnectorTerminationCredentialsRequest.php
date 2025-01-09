<?php

namespace Sunaoka\Aws\Structures\Chime\DeleteVoiceConnectorTerminationCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 * @property list<string> $Usernames
 */
class DeleteVoiceConnectorTerminationCredentialsRequest extends Request
{
    /**
     * @param array{
     *     VoiceConnectorId: string,
     *     Usernames: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
