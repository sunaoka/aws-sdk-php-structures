<?php

namespace Sunaoka\Aws\Structures\Sqs\ReceiveMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueueUrl
 * @property list<'All'|'Policy'|'VisibilityTimeout'|'MaximumMessageSize'|'MessageRetentionPeriod'|'ApproximateNumberOfMessages'|'ApproximateNumberOfMessagesNotVisible'|'CreatedTimestamp'|'LastModifiedTimestamp'|'QueueArn'|'ApproximateNumberOfMessagesDelayed'|'DelaySeconds'|'ReceiveMessageWaitTimeSeconds'|'RedrivePolicy'|'FifoQueue'|'ContentBasedDeduplication'|'KmsMasterKeyId'|'KmsDataKeyReusePeriodSeconds'|'DeduplicationScope'|'FifoThroughputLimit'|'RedriveAllowPolicy'|'SqsManagedSseEnabled'> $AttributeNames
 * @property list<'All'|'SenderId'|'SentTimestamp'|'ApproximateReceiveCount'|'ApproximateFirstReceiveTimestamp'|'SequenceNumber'|'MessageDeduplicationId'|'MessageGroupId'|'AWSTraceHeader'|'DeadLetterQueueSourceArn'> $MessageSystemAttributeNames
 * @property list<string> $MessageAttributeNames
 * @property int $MaxNumberOfMessages
 * @property int $VisibilityTimeout
 * @property int $WaitTimeSeconds
 * @property string $ReceiveRequestAttemptId
 */
class ReceiveMessageRequest extends Request
{
    /**
     * @param array{
     *     QueueUrl: string,
     *     AttributeNames?: list<'All'|'Policy'|'VisibilityTimeout'|'MaximumMessageSize'|'MessageRetentionPeriod'|'ApproximateNumberOfMessages'|'ApproximateNumberOfMessagesNotVisible'|'CreatedTimestamp'|'LastModifiedTimestamp'|'QueueArn'|'ApproximateNumberOfMessagesDelayed'|'DelaySeconds'|'ReceiveMessageWaitTimeSeconds'|'RedrivePolicy'|'FifoQueue'|'ContentBasedDeduplication'|'KmsMasterKeyId'|'KmsDataKeyReusePeriodSeconds'|'DeduplicationScope'|'FifoThroughputLimit'|'RedriveAllowPolicy'|'SqsManagedSseEnabled'>,
     *     MessageSystemAttributeNames?: list<'All'|'SenderId'|'SentTimestamp'|'ApproximateReceiveCount'|'ApproximateFirstReceiveTimestamp'|'SequenceNumber'|'MessageDeduplicationId'|'MessageGroupId'|'AWSTraceHeader'|'DeadLetterQueueSourceArn'>,
     *     MessageAttributeNames?: list<string>,
     *     MaxNumberOfMessages?: int,
     *     VisibilityTimeout?: int,
     *     WaitTimeSeconds?: int,
     *     ReceiveRequestAttemptId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
