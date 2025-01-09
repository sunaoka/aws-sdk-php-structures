<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetVoiceToneAnalysisTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 * @property string $VoiceToneAnalysisTaskId
 * @property bool $IsCaller
 */
class GetVoiceToneAnalysisTaskRequest extends Request
{
    /**
     * @param array{
     *     VoiceConnectorId: string,
     *     VoiceToneAnalysisTaskId: string,
     *     IsCaller: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
