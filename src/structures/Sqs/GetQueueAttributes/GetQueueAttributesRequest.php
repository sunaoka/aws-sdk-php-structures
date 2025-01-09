<?php

namespace Sunaoka\Aws\Structures\Sqs\GetQueueAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueueUrl
 * @property list<'All'|'Policy'|'VisibilityTimeout'|'MaximumMessageSize'|'MessageRetentionPeriod'|'ApproximateNumberOfMessages'|'ApproximateNumberOfMessagesNotVisible'|'CreatedTimestamp'|'LastModifiedTimestamp'|'QueueArn'|'ApproximateNumberOfMessagesDelayed'|'DelaySeconds'|'ReceiveMessageWaitTimeSeconds'|'RedrivePolicy'|'FifoQueue'|'ContentBasedDeduplication'|'KmsMasterKeyId'|'KmsDataKeyReusePeriodSeconds'|'DeduplicationScope'|'FifoThroughputLimit'|'RedriveAllowPolicy'|'SqsManagedSseEnabled'> $AttributeNames
 */
class GetQueueAttributesRequest extends Request
{
    /**
     * @param array{
     *     QueueUrl: string,
     *     AttributeNames?: list<'All'|'Policy'|'VisibilityTimeout'|'MaximumMessageSize'|'MessageRetentionPeriod'|'ApproximateNumberOfMessages'|'ApproximateNumberOfMessagesNotVisible'|'CreatedTimestamp'|'LastModifiedTimestamp'|'QueueArn'|'ApproximateNumberOfMessagesDelayed'|'DelaySeconds'|'ReceiveMessageWaitTimeSeconds'|'RedrivePolicy'|'FifoQueue'|'ContentBasedDeduplication'|'KmsMasterKeyId'|'KmsDataKeyReusePeriodSeconds'|'DeduplicationScope'|'FifoThroughputLimit'|'RedriveAllowPolicy'|'SqsManagedSseEnabled'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
