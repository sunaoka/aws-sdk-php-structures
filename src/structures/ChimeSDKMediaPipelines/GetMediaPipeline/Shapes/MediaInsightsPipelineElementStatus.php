<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AmazonTranscribeCallAnalyticsProcessor'|'VoiceAnalyticsProcessor'|'AmazonTranscribeProcessor'|'KinesisDataStreamSink'|'LambdaFunctionSink'|'SqsQueueSink'|'SnsTopicSink'|'S3RecordingSink'|'VoiceEnhancementSink' $Type
 * @property 'NotStarted'|'NotSupported'|'Initializing'|'InProgress'|'Failed'|'Stopping'|'Stopped'|'Paused' $Status
 */
class MediaInsightsPipelineElementStatus extends Shape
{
    /**
     * @param array{
     *     Type?: 'AmazonTranscribeCallAnalyticsProcessor'|'VoiceAnalyticsProcessor'|'AmazonTranscribeProcessor'|'KinesisDataStreamSink'|'LambdaFunctionSink'|'SqsQueueSink'|'SnsTopicSink'|'S3RecordingSink'|'VoiceEnhancementSink',
     *     Status?: 'NotStarted'|'NotSupported'|'Initializing'|'InProgress'|'Failed'|'Stopping'|'Stopped'|'Paused'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
