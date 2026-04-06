<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaStreamPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MediaPipelineId
 * @property string|null $MediaPipelineArn
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $UpdatedTimestamp
 * @property 'Initializing'|'InProgress'|'Failed'|'Stopping'|'Stopped'|'Paused'|'NotStarted'|null $Status
 * @property list<MediaStreamSource>|null $Sources
 * @property list<MediaStreamSink>|null $Sinks
 */
class MediaStreamPipeline extends Shape
{
    /**
     * @param array{
     *     MediaPipelineId?: string|null,
     *     MediaPipelineArn?: string|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'Initializing'|'InProgress'|'Failed'|'Stopping'|'Stopped'|'Paused'|'NotStarted'|null,
     *     Sources?: list<MediaStreamSource>|null,
     *     Sinks?: list<MediaStreamSink>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
