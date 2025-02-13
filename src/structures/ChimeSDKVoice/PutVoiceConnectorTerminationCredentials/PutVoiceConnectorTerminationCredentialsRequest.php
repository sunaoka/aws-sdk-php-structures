<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\PutVoiceConnectorTerminationCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 * @property list<Shapes\Credential>|null $Credentials
 */
class PutVoiceConnectorTerminationCredentialsRequest extends Request
{
    /**
     * @param array{
     *     VoiceConnectorId: string,
     *     Credentials?: list<Shapes\Credential>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
