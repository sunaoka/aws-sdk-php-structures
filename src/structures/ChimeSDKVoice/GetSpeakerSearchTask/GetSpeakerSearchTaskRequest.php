<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetSpeakerSearchTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 * @property string $SpeakerSearchTaskId
 */
class GetSpeakerSearchTaskRequest extends Request
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
