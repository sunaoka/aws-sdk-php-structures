<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\StopVoiceToneAnalysisTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 * @property string $VoiceToneAnalysisTaskId
 */
class StopVoiceToneAnalysisTaskRequest extends Request
{
    /**
     * @param array{
     *     VoiceConnectorId: string,
     *     VoiceToneAnalysisTaskId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
