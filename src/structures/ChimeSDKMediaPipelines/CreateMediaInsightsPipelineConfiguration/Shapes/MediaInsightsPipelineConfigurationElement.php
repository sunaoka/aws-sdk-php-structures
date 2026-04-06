<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaInsightsPipelineConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AmazonTranscribeCallAnalyticsProcessor'|'VoiceAnalyticsProcessor'|'AmazonTranscribeProcessor'|'KinesisDataStreamSink'|'LambdaFunctionSink'|'SqsQueueSink'|'SnsTopicSink'|'S3RecordingSink' $Type
 * @property AmazonTranscribeCallAnalyticsProcessorConfiguration|null $AmazonTranscribeCallAnalyticsProcessorConfiguration
 * @property AmazonTranscribeProcessorConfiguration|null $AmazonTranscribeProcessorConfiguration
 * @property KinesisDataStreamSinkConfiguration|null $KinesisDataStreamSinkConfiguration
 * @property S3RecordingSinkConfiguration|null $S3RecordingSinkConfiguration
 * @property VoiceAnalyticsProcessorConfiguration|null $VoiceAnalyticsProcessorConfiguration
 * @property LambdaFunctionSinkConfiguration|null $LambdaFunctionSinkConfiguration
 * @property SqsQueueSinkConfiguration|null $SqsQueueSinkConfiguration
 * @property SnsTopicSinkConfiguration|null $SnsTopicSinkConfiguration
 */
class MediaInsightsPipelineConfigurationElement extends Shape
{
    /**
     * @param array{
     *     Type: 'AmazonTranscribeCallAnalyticsProcessor'|'VoiceAnalyticsProcessor'|'AmazonTranscribeProcessor'|'KinesisDataStreamSink'|'LambdaFunctionSink'|'SqsQueueSink'|'SnsTopicSink'|'S3RecordingSink',
     *     AmazonTranscribeCallAnalyticsProcessorConfiguration?: AmazonTranscribeCallAnalyticsProcessorConfiguration|null,
     *     AmazonTranscribeProcessorConfiguration?: AmazonTranscribeProcessorConfiguration|null,
     *     KinesisDataStreamSinkConfiguration?: KinesisDataStreamSinkConfiguration|null,
     *     S3RecordingSinkConfiguration?: S3RecordingSinkConfiguration|null,
     *     VoiceAnalyticsProcessorConfiguration?: VoiceAnalyticsProcessorConfiguration|null,
     *     LambdaFunctionSinkConfiguration?: LambdaFunctionSinkConfiguration|null,
     *     SqsQueueSinkConfiguration?: SqsQueueSinkConfiguration|null,
     *     SnsTopicSinkConfiguration?: SnsTopicSinkConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
