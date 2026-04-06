<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaLiveConnectorPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LiveConnectorSourceConfiguration>|null $Sources
 * @property list<LiveConnectorSinkConfiguration>|null $Sinks
 * @property string|null $MediaPipelineId
 * @property string|null $MediaPipelineArn
 * @property 'Initializing'|'InProgress'|'Failed'|'Stopping'|'Stopped'|'Paused'|'NotStarted'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $UpdatedTimestamp
 */
class MediaLiveConnectorPipeline extends Shape
{
    /**
     * @param array{
     *     Sources?: list<LiveConnectorSourceConfiguration>|null,
     *     Sinks?: list<LiveConnectorSinkConfiguration>|null,
     *     MediaPipelineId?: string|null,
     *     MediaPipelineArn?: string|null,
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
