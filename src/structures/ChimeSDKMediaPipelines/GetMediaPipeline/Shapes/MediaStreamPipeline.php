<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MediaPipelineId
 * @property string $MediaPipelineArn
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 * @property 'Initializing'|'InProgress'|'Failed'|'Stopping'|'Stopped'|'Paused'|'NotStarted' $Status
 * @property list<MediaStreamSource> $Sources
 * @property list<MediaStreamSink> $Sinks
 */
class MediaStreamPipeline extends Shape
{
    /**
     * @param array{
     *     MediaPipelineId?: string,
     *     MediaPipelineArn?: string,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult,
     *     Status?: 'Initializing'|'InProgress'|'Failed'|'Stopping'|'Stopped'|'Paused'|'NotStarted',
     *     Sources?: list<MediaStreamSource>,
     *     Sinks?: list<MediaStreamSink>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
