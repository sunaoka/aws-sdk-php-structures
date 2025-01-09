<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\StopVoiceToneAnalysisTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property string $VoiceToneAnalysisTaskId
 */
class StopVoiceToneAnalysisTaskRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     VoiceToneAnalysisTaskId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
