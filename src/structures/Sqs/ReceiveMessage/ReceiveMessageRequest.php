<?php

namespace Sunaoka\Aws\Structures\Sqs\ReceiveMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueueUrl
 * @property list<'All'|'Policy'|'VisibilityTimeout'|'MaximumMessageSize'|'MessageRetentionPeriod'|'ApproximateNumberOfMessages'|'ApproximateNumberOfMessagesNotVisible'|'CreatedTimestamp'|'LastModifiedTimestamp'|'QueueArn'|'ApproximateNumberOfMessagesDelayed'|'DelaySeconds'|'ReceiveMessageWaitTimeSeconds'|'RedrivePolicy'|'FifoQueue'|'ContentBasedDeduplication'|'KmsMasterKeyId'|'KmsDataKeyReusePeriodSeconds'|'DeduplicationScope'|'FifoThroughputLimit'|'RedriveAllowPolicy'|'SqsManagedSseEnabled'>|null $AttributeNames
 * @property list<'All'|'SenderId'|'SentTimestamp'|'ApproximateReceiveCount'|'ApproximateFirstReceiveTimestamp'|'SequenceNumber'|'MessageDeduplicationId'|'MessageGroupId'|'AWSTraceHeader'|'DeadLetterQueueSourceArn'>|null $MessageSystemAttributeNames
 * @property list<string>|null $MessageAttributeNames
 * @property int|null $MaxNumberOfMessages
 * @property int|null $VisibilityTimeout
 * @property int|null $WaitTimeSeconds
 * @property string|null $ReceiveRequestAttemptId
 */
class ReceiveMessageRequest extends Request
{
    /**
     * @param array{
     *     QueueUrl: string,
     *     AttributeNames?: list<'All'|'Policy'|'VisibilityTimeout'|'MaximumMessageSize'|'MessageRetentionPeriod'|'ApproximateNumberOfMessages'|'ApproximateNumberOfMessagesNotVisible'|'CreatedTimestamp'|'LastModifiedTimestamp'|'QueueArn'|'ApproximateNumberOfMessagesDelayed'|'DelaySeconds'|'ReceiveMessageWaitTimeSeconds'|'RedrivePolicy'|'FifoQueue'|'ContentBasedDeduplication'|'KmsMasterKeyId'|'KmsDataKeyReusePeriodSeconds'|'DeduplicationScope'|'FifoThroughputLimit'|'RedriveAllowPolicy'|'SqsManagedSseEnabled'>|null,
     *     MessageSystemAttributeNames?: list<'All'|'SenderId'|'SentTimestamp'|'ApproximateReceiveCount'|'ApproximateFirstReceiveTimestamp'|'SequenceNumber'|'MessageDeduplicationId'|'MessageGroupId'|'AWSTraceHeader'|'DeadLetterQueueSourceArn'>|null,
     *     MessageAttributeNames?: list<string>|null,
     *     MaxNumberOfMessages?: int|null,
     *     VisibilityTimeout?: int|null,
     *     WaitTimeSeconds?: int|null,
     *     ReceiveRequestAttemptId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
