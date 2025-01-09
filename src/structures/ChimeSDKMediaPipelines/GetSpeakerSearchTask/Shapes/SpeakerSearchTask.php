<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetSpeakerSearchTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SpeakerSearchTaskId
 * @property 'NotStarted'|'Initializing'|'InProgress'|'Failed'|'Stopping'|'Stopped' $SpeakerSearchTaskStatus
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 */
class SpeakerSearchTask extends Shape
{
    /**
     * @param array{
     *     SpeakerSearchTaskId?: string,
     *     SpeakerSearchTaskStatus?: 'NotStarted'|'Initializing'|'InProgress'|'Failed'|'Stopping'|'Stopped',
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
