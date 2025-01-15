<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\StartSpeakerSearchTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SpeakerSearchTaskId
 * @property 'NotStarted'|'Initializing'|'InProgress'|'Failed'|'Stopping'|'Stopped'|null $SpeakerSearchTaskStatus
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $UpdatedTimestamp
 */
class SpeakerSearchTask extends Shape
{
    /**
     * @param array{
     *     SpeakerSearchTaskId?: string|null,
     *     SpeakerSearchTaskStatus?: 'NotStarted'|'Initializing'|'InProgress'|'Failed'|'Stopping'|'Stopped'|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
