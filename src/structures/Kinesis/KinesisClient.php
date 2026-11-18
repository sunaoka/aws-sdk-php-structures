<?php

namespace Sunaoka\Aws\Structures\Kinesis;

class KinesisClient extends \Aws\Kinesis\KinesisClient
{
    use AcknowledgeDeadLetterQueueRecords\AcknowledgeDeadLetterQueueRecordsTrait;
    use AcknowledgeQueueRecords\AcknowledgeQueueRecordsTrait;
    use AddTagsToStream\AddTagsToStreamTrait;
    use CreateChannel\CreateChannelTrait;
    use CreateQueue\CreateQueueTrait;
    use CreateStream\CreateStreamTrait;
    use DecreaseStreamRetentionPeriod\DecreaseStreamRetentionPeriodTrait;
    use DeleteChannel\DeleteChannelTrait;
    use DeleteQueue\DeleteQueueTrait;
    use DeleteResourcePolicy\DeleteResourcePolicyTrait;
    use DeleteStream\DeleteStreamTrait;
    use DeregisterStreamConsumer\DeregisterStreamConsumerTrait;
    use DescribeAccountSettings\DescribeAccountSettingsTrait;
    use DescribeChannel\DescribeChannelTrait;
    use DescribeLimits\DescribeLimitsTrait;
    use DescribeQueue\DescribeQueueTrait;
    use DescribeStream\DescribeStreamTrait;
    use DescribeStreamConsumer\DescribeStreamConsumerTrait;
    use DescribeStreamSummary\DescribeStreamSummaryTrait;
    use DisableEnhancedMonitoring\DisableEnhancedMonitoringTrait;
    use EnableEnhancedMonitoring\EnableEnhancedMonitoringTrait;
    use GetRecords\GetRecordsTrait;
    use GetResourcePolicy\GetResourcePolicyTrait;
    use GetShardIterator\GetShardIteratorTrait;
    use IncreaseStreamRetentionPeriod\IncreaseStreamRetentionPeriodTrait;
    use ListChannels\ListChannelsTrait;
    use ListQueues\ListQueuesTrait;
    use ListShards\ListShardsTrait;
    use ListStreamConsumers\ListStreamConsumersTrait;
    use ListStreams\ListStreamsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTagsForStream\ListTagsForStreamTrait;
    use MergeShards\MergeShardsTrait;
    use PutRecord\PutRecordTrait;
    use PutRecords\PutRecordsTrait;
    use PutResourcePolicy\PutResourcePolicyTrait;
    use ReceiveDeadLetterQueueRecords\ReceiveDeadLetterQueueRecordsTrait;
    use ReceiveQueueRecords\ReceiveQueueRecordsTrait;
    use RegisterStreamConsumer\RegisterStreamConsumerTrait;
    use RemoveTagsFromStream\RemoveTagsFromStreamTrait;
    use RestoreDeadLetterQueueRecords\RestoreDeadLetterQueueRecordsTrait;
    use SplitShard\SplitShardTrait;
    use StartStreamEncryption\StartStreamEncryptionTrait;
    use StopStreamEncryption\StopStreamEncryptionTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAccountSettings\UpdateAccountSettingsTrait;
    use UpdateChannel\UpdateChannelTrait;
    use UpdateDeadLetterQueueRecordsVisibility\UpdateDeadLetterQueueRecordsVisibilityTrait;
    use UpdateMaxRecordSize\UpdateMaxRecordSizeTrait;
    use UpdateQueue\UpdateQueueTrait;
    use UpdateQueueRecordsVisibility\UpdateQueueRecordsVisibilityTrait;
    use UpdateShardCount\UpdateShardCountTrait;
    use UpdateStreamMode\UpdateStreamModeTrait;
    use UpdateStreamRecordDistributionStrategy\UpdateStreamRecordDistributionStrategyTrait;
    use UpdateStreamWarmThroughput\UpdateStreamWarmThroughputTrait;
}
