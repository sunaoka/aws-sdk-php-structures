<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaConcatenationPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MediaPipelineId
 * @property string $MediaPipelineArn
 * @property list<ConcatenationSource> $Sources
 * @property list<ConcatenationSink> $Sinks
 * @property 'Initializing'|'InProgress'|'Failed'|'Stopping'|'Stopped'|'Paused'|'NotStarted' $Status
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 */
class MediaConcatenationPipeline extends Shape
{
    /**
     * @param array{
     *     MediaPipelineId?: string,
     *     MediaPipelineArn?: string,
     *     Sources?: list<ConcatenationSource>,
     *     Sinks?: list<ConcatenationSink>,
     *     Status?: 'Initializing'|'InProgress'|'Failed'|'Stopping'|'Stopped'|'Paused'|'NotStarted',
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
