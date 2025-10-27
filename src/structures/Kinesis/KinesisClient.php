<?php

namespace Sunaoka\Aws\Structures\Kinesis;

class KinesisClient extends \Aws\Kinesis\KinesisClient
{
    use AddTagsToStream\AddTagsToStreamTrait;
    use CreateStream\CreateStreamTrait;
    use DecreaseStreamRetentionPeriod\DecreaseStreamRetentionPeriodTrait;
    use DeleteResourcePolicy\DeleteResourcePolicyTrait;
    use DeleteStream\DeleteStreamTrait;
    use DeregisterStreamConsumer\DeregisterStreamConsumerTrait;
    use DescribeLimits\DescribeLimitsTrait;
    use DescribeStream\DescribeStreamTrait;
    use DescribeStreamConsumer\DescribeStreamConsumerTrait;
    use DescribeStreamSummary\DescribeStreamSummaryTrait;
    use DisableEnhancedMonitoring\DisableEnhancedMonitoringTrait;
    use EnableEnhancedMonitoring\EnableEnhancedMonitoringTrait;
    use GetRecords\GetRecordsTrait;
    use GetResourcePolicy\GetResourcePolicyTrait;
    use GetShardIterator\GetShardIteratorTrait;
    use IncreaseStreamRetentionPeriod\IncreaseStreamRetentionPeriodTrait;
    use ListShards\ListShardsTrait;
    use ListStreamConsumers\ListStreamConsumersTrait;
    use ListStreams\ListStreamsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTagsForStream\ListTagsForStreamTrait;
    use MergeShards\MergeShardsTrait;
    use PutRecord\PutRecordTrait;
    use PutRecords\PutRecordsTrait;
    use PutResourcePolicy\PutResourcePolicyTrait;
    use RegisterStreamConsumer\RegisterStreamConsumerTrait;
    use RemoveTagsFromStream\RemoveTagsFromStreamTrait;
    use SplitShard\SplitShardTrait;
    use StartStreamEncryption\StartStreamEncryptionTrait;
    use StopStreamEncryption\StopStreamEncryptionTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateMaxRecordSize\UpdateMaxRecordSizeTrait;
    use UpdateShardCount\UpdateShardCountTrait;
    use UpdateStreamMode\UpdateStreamModeTrait;
}
