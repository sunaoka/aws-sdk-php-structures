<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LiveConnectorSourceConfiguration> $Sources
 * @property list<LiveConnectorSinkConfiguration> $Sinks
 * @property string $MediaPipelineId
 * @property string $MediaPipelineArn
 * @property 'Initializing'|'InProgress'|'Failed'|'Stopping'|'Stopped'|'Paused'|'NotStarted' $Status
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 */
class MediaLiveConnectorPipeline extends Shape
{
    /**
     * @param array{
     *     Sources?: list<LiveConnectorSourceConfiguration>,
     *     Sinks?: list<LiveConnectorSinkConfiguration>,
     *     MediaPipelineId?: string,
     *     MediaPipelineArn?: string,
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
