<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaConcatenationPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MediaPipelineId
 * @property string|null $MediaPipelineArn
 * @property list<ConcatenationSource>|null $Sources
 * @property list<ConcatenationSink>|null $Sinks
 * @property 'Initializing'|'InProgress'|'Failed'|'Stopping'|'Stopped'|'Paused'|'NotStarted'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $UpdatedTimestamp
 */
class MediaConcatenationPipeline extends Shape
{
    /**
     * @param array{
     *     MediaPipelineId?: string|null,
     *     MediaPipelineArn?: string|null,
     *     Sources?: list<ConcatenationSource>|null,
     *     Sinks?: list<ConcatenationSink>|null,
     *     Status?: 'Initializing'|'InProgress'|'Failed'|'Stopping'|'Stopped'|'Paused'|'NotStarted'|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
