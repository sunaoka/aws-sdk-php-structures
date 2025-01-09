<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaInsightsPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MediaPipelineId
 * @property string $MediaPipelineArn
 * @property string $MediaInsightsPipelineConfigurationArn
 * @property 'Initializing'|'InProgress'|'Failed'|'Stopping'|'Stopped'|'Paused'|'NotStarted' $Status
 * @property KinesisVideoStreamSourceRuntimeConfiguration $KinesisVideoStreamSourceRuntimeConfiguration
 * @property array<string, string> $MediaInsightsRuntimeMetadata
 * @property KinesisVideoStreamRecordingSourceRuntimeConfiguration $KinesisVideoStreamRecordingSourceRuntimeConfiguration
 * @property S3RecordingSinkRuntimeConfiguration $S3RecordingSinkRuntimeConfiguration
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property list<MediaInsightsPipelineElementStatus> $ElementStatuses
 */
class MediaInsightsPipeline extends Shape
{
    /**
     * @param array{
     *     MediaPipelineId?: string,
     *     MediaPipelineArn?: string,
     *     MediaInsightsPipelineConfigurationArn?: string,
     *     Status?: 'Initializing'|'InProgress'|'Failed'|'Stopping'|'Stopped'|'Paused'|'NotStarted',
     *     KinesisVideoStreamSourceRuntimeConfiguration?: KinesisVideoStreamSourceRuntimeConfiguration,
     *     MediaInsightsRuntimeMetadata?: array<string, string>,
     *     KinesisVideoStreamRecordingSourceRuntimeConfiguration?: KinesisVideoStreamRecordingSourceRuntimeConfiguration,
     *     S3RecordingSinkRuntimeConfiguration?: S3RecordingSinkRuntimeConfiguration,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     ElementStatuses?: list<MediaInsightsPipelineElementStatus>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
