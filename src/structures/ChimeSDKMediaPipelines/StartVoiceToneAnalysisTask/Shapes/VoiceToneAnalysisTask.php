<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\StartVoiceToneAnalysisTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VoiceToneAnalysisTaskId
 * @property 'NotStarted'|'Initializing'|'InProgress'|'Failed'|'Stopping'|'Stopped' $VoiceToneAnalysisTaskStatus
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 */
class VoiceToneAnalysisTask extends Shape
{
    /**
     * @param array{
     *     VoiceToneAnalysisTaskId?: string,
     *     VoiceToneAnalysisTaskStatus?: 'NotStarted'|'Initializing'|'InProgress'|'Failed'|'Stopping'|'Stopped',
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
