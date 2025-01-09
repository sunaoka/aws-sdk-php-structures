<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaInsightsPipelineConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AmazonTranscribeCallAnalyticsProcessor'|'VoiceAnalyticsProcessor'|'AmazonTranscribeProcessor'|'KinesisDataStreamSink'|'LambdaFunctionSink'|'SqsQueueSink'|'SnsTopicSink'|'S3RecordingSink'|'VoiceEnhancementSink' $Type
 * @property AmazonTranscribeCallAnalyticsProcessorConfiguration $AmazonTranscribeCallAnalyticsProcessorConfiguration
 * @property AmazonTranscribeProcessorConfiguration $AmazonTranscribeProcessorConfiguration
 * @property KinesisDataStreamSinkConfiguration $KinesisDataStreamSinkConfiguration
 * @property S3RecordingSinkConfiguration $S3RecordingSinkConfiguration
 * @property VoiceAnalyticsProcessorConfiguration $VoiceAnalyticsProcessorConfiguration
 * @property LambdaFunctionSinkConfiguration $LambdaFunctionSinkConfiguration
 * @property SqsQueueSinkConfiguration $SqsQueueSinkConfiguration
 * @property SnsTopicSinkConfiguration $SnsTopicSinkConfiguration
 * @property VoiceEnhancementSinkConfiguration $VoiceEnhancementSinkConfiguration
 */
class MediaInsightsPipelineConfigurationElement extends Shape
{
    /**
     * @param array{
     *     Type: 'AmazonTranscribeCallAnalyticsProcessor'|'VoiceAnalyticsProcessor'|'AmazonTranscribeProcessor'|'KinesisDataStreamSink'|'LambdaFunctionSink'|'SqsQueueSink'|'SnsTopicSink'|'S3RecordingSink'|'VoiceEnhancementSink',
     *     AmazonTranscribeCallAnalyticsProcessorConfiguration?: AmazonTranscribeCallAnalyticsProcessorConfiguration,
     *     AmazonTranscribeProcessorConfiguration?: AmazonTranscribeProcessorConfiguration,
     *     KinesisDataStreamSinkConfiguration?: KinesisDataStreamSinkConfiguration,
     *     S3RecordingSinkConfiguration?: S3RecordingSinkConfiguration,
     *     VoiceAnalyticsProcessorConfiguration?: VoiceAnalyticsProcessorConfiguration,
     *     LambdaFunctionSinkConfiguration?: LambdaFunctionSinkConfiguration,
     *     SqsQueueSinkConfiguration?: SqsQueueSinkConfiguration,
     *     SnsTopicSinkConfiguration?: SnsTopicSinkConfiguration,
     *     VoiceEnhancementSinkConfiguration?: VoiceEnhancementSinkConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
