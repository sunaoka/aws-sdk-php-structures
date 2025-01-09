<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetVoiceConnectorTermination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 */
class GetVoiceConnectorTerminationRequest extends Request
{
    /**
     * @param array{VoiceConnectorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
