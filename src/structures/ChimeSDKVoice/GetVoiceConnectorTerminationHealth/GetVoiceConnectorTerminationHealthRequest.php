<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetVoiceConnectorTerminationHealth;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 */
class GetVoiceConnectorTerminationHealthRequest extends Request
{
    /**
     * @param array{VoiceConnectorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
