<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\ListVoiceConnectorTerminationCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 */
class ListVoiceConnectorTerminationCredentialsRequest extends Request
{
    /**
     * @param array{VoiceConnectorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
