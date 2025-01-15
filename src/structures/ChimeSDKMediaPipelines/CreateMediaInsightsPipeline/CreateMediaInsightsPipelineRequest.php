<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaInsightsPipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MediaInsightsPipelineConfigurationArn
 * @property Shapes\KinesisVideoStreamSourceRuntimeConfiguration|null $KinesisVideoStreamSourceRuntimeConfiguration
 * @property array<string, string>|null $MediaInsightsRuntimeMetadata
 * @property Shapes\KinesisVideoStreamRecordingSourceRuntimeConfiguration|null $KinesisVideoStreamRecordingSourceRuntimeConfiguration
 * @property Shapes\S3RecordingSinkRuntimeConfiguration|null $S3RecordingSinkRuntimeConfiguration
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ClientRequestToken
 */
class CreateMediaInsightsPipelineRequest extends Request
{
    /**
     * @param array{
     *     MediaInsightsPipelineConfigurationArn: string,
     *     KinesisVideoStreamSourceRuntimeConfiguration?: Shapes\KinesisVideoStreamSourceRuntimeConfiguration|null,
     *     MediaInsightsRuntimeMetadata?: array<string, string>|null,
     *     KinesisVideoStreamRecordingSourceRuntimeConfiguration?: Shapes\KinesisVideoStreamRecordingSourceRuntimeConfiguration|null,
     *     S3RecordingSinkRuntimeConfiguration?: Shapes\S3RecordingSinkRuntimeConfiguration|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ClientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
