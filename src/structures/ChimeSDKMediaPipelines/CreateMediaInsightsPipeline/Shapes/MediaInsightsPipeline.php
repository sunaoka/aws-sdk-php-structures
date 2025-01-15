<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaInsightsPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MediaPipelineId
 * @property string|null $MediaPipelineArn
 * @property string|null $MediaInsightsPipelineConfigurationArn
 * @property 'Initializing'|'InProgress'|'Failed'|'Stopping'|'Stopped'|'Paused'|'NotStarted'|null $Status
 * @property KinesisVideoStreamSourceRuntimeConfiguration|null $KinesisVideoStreamSourceRuntimeConfiguration
 * @property array<string, string>|null $MediaInsightsRuntimeMetadata
 * @property KinesisVideoStreamRecordingSourceRuntimeConfiguration|null $KinesisVideoStreamRecordingSourceRuntimeConfiguration
 * @property S3RecordingSinkRuntimeConfiguration|null $S3RecordingSinkRuntimeConfiguration
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property list<MediaInsightsPipelineElementStatus>|null $ElementStatuses
 */
class MediaInsightsPipeline extends Shape
{
    /**
     * @param array{
     *     MediaPipelineId?: string|null,
     *     MediaPipelineArn?: string|null,
     *     MediaInsightsPipelineConfigurationArn?: string|null,
     *     Status?: 'Initializing'|'InProgress'|'Failed'|'Stopping'|'Stopped'|'Paused'|'NotStarted'|null,
     *     KinesisVideoStreamSourceRuntimeConfiguration?: KinesisVideoStreamSourceRuntimeConfiguration|null,
     *     MediaInsightsRuntimeMetadata?: array<string, string>|null,
     *     KinesisVideoStreamRecordingSourceRuntimeConfiguration?: KinesisVideoStreamRecordingSourceRuntimeConfiguration|null,
     *     S3RecordingSinkRuntimeConfiguration?: S3RecordingSinkRuntimeConfiguration|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ElementStatuses?: list<MediaInsightsPipelineElementStatus>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
