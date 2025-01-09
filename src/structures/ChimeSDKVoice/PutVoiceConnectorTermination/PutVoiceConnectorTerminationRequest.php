<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\PutVoiceConnectorTermination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 * @property Shapes\Termination $Termination
 */
class PutVoiceConnectorTerminationRequest extends Request
{
    /**
     * @param array{
     *     VoiceConnectorId: string,
     *     Termination: Shapes\Termination
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
