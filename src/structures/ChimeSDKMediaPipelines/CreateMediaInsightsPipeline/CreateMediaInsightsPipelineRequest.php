<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaInsightsPipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MediaInsightsPipelineConfigurationArn
 * @property Shapes\KinesisVideoStreamSourceRuntimeConfiguration $KinesisVideoStreamSourceRuntimeConfiguration
 * @property array<string, string> $MediaInsightsRuntimeMetadata
 * @property Shapes\KinesisVideoStreamRecordingSourceRuntimeConfiguration $KinesisVideoStreamRecordingSourceRuntimeConfiguration
 * @property Shapes\S3RecordingSinkRuntimeConfiguration $S3RecordingSinkRuntimeConfiguration
 * @property list<Shapes\Tag> $Tags
 * @property string $ClientRequestToken
 */
class CreateMediaInsightsPipelineRequest extends Request
{
    /**
     * @param array{
     *     MediaInsightsPipelineConfigurationArn: string,
     *     KinesisVideoStreamSourceRuntimeConfiguration?: Shapes\KinesisVideoStreamSourceRuntimeConfiguration,
     *     MediaInsightsRuntimeMetadata?: array<string, string>,
     *     KinesisVideoStreamRecordingSourceRuntimeConfiguration?: Shapes\KinesisVideoStreamRecordingSourceRuntimeConfiguration,
     *     S3RecordingSinkRuntimeConfiguration?: Shapes\S3RecordingSinkRuntimeConfiguration,
     *     Tags?: list<Shapes\Tag>,
     *     ClientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
