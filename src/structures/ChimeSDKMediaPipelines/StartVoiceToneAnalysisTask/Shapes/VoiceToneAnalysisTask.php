<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\StartVoiceToneAnalysisTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VoiceToneAnalysisTaskId
 * @property 'NotStarted'|'Initializing'|'InProgress'|'Failed'|'Stopping'|'Stopped'|null $VoiceToneAnalysisTaskStatus
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $UpdatedTimestamp
 */
class VoiceToneAnalysisTask extends Shape
{
    /**
     * @param array{
     *     VoiceToneAnalysisTaskId?: string|null,
     *     VoiceToneAnalysisTaskStatus?: 'NotStarted'|'Initializing'|'InProgress'|'Failed'|'Stopping'|'Stopped'|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
