<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaInsightsPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AmazonTranscribeCallAnalyticsProcessor'|'VoiceAnalyticsProcessor'|'AmazonTranscribeProcessor'|'KinesisDataStreamSink'|'LambdaFunctionSink'|'SqsQueueSink'|'SnsTopicSink'|'S3RecordingSink'|'VoiceEnhancementSink'|null $Type
 * @property 'NotStarted'|'NotSupported'|'Initializing'|'InProgress'|'Failed'|'Stopping'|'Stopped'|'Paused'|null $Status
 */
class MediaInsightsPipelineElementStatus extends Shape
{
    /**
     * @param array{
     *     Type?: 'AmazonTranscribeCallAnalyticsProcessor'|'VoiceAnalyticsProcessor'|'AmazonTranscribeProcessor'|'KinesisDataStreamSink'|'LambdaFunctionSink'|'SqsQueueSink'|'SnsTopicSink'|'S3RecordingSink'|'VoiceEnhancementSink'|null,
     *     Status?: 'NotStarted'|'NotSupported'|'Initializing'|'InProgress'|'Failed'|'Stopping'|'Stopped'|'Paused'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
