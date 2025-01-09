<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetVoiceToneAnalysisTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property string $VoiceToneAnalysisTaskId
 */
class GetVoiceToneAnalysisTaskRequest extends Request
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
