<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KmsMasterKeyId
 * @property list<AwsSnsTopicSubscription>|null $Subscription
 * @property string|null $TopicName
 * @property string|null $Owner
 * @property string|null $SqsSuccessFeedbackRoleArn
 * @property string|null $SqsFailureFeedbackRoleArn
 * @property string|null $ApplicationSuccessFeedbackRoleArn
 * @property string|null $FirehoseSuccessFeedbackRoleArn
 * @property string|null $FirehoseFailureFeedbackRoleArn
 * @property string|null $HttpSuccessFeedbackRoleArn
 * @property string|null $HttpFailureFeedbackRoleArn
 */
class AwsSnsTopicDetails extends Shape
{
    /**
     * @param array{
     *     KmsMasterKeyId?: string|null,
     *     Subscription?: list<AwsSnsTopicSubscription>|null,
     *     TopicName?: string|null,
     *     Owner?: string|null,
     *     SqsSuccessFeedbackRoleArn?: string|null,
     *     SqsFailureFeedbackRoleArn?: string|null,
     *     ApplicationSuccessFeedbackRoleArn?: string|null,
     *     FirehoseSuccessFeedbackRoleArn?: string|null,
     *     FirehoseFailureFeedbackRoleArn?: string|null,
     *     HttpSuccessFeedbackRoleArn?: string|null,
     *     HttpFailureFeedbackRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
