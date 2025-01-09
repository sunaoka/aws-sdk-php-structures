<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\StopSpeakerSearchTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 * @property string $SpeakerSearchTaskId
 */
class StopSpeakerSearchTaskRequest extends Request
{
    /**
     * @param array{
     *     VoiceConnectorId: string,
     *     SpeakerSearchTaskId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
