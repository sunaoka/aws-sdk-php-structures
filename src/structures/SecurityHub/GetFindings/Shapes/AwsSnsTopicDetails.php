<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KmsMasterKeyId
 * @property list<AwsSnsTopicSubscription> $Subscription
 * @property string $TopicName
 * @property string $Owner
 * @property string $SqsSuccessFeedbackRoleArn
 * @property string $SqsFailureFeedbackRoleArn
 * @property string $ApplicationSuccessFeedbackRoleArn
 * @property string $FirehoseSuccessFeedbackRoleArn
 * @property string $FirehoseFailureFeedbackRoleArn
 * @property string $HttpSuccessFeedbackRoleArn
 * @property string $HttpFailureFeedbackRoleArn
 */
class AwsSnsTopicDetails extends Shape
{
    /**
     * @param array{
     *     KmsMasterKeyId?: string,
     *     Subscription?: list<AwsSnsTopicSubscription>,
     *     TopicName?: string,
     *     Owner?: string,
     *     SqsSuccessFeedbackRoleArn?: string,
     *     SqsFailureFeedbackRoleArn?: string,
     *     ApplicationSuccessFeedbackRoleArn?: string,
     *     FirehoseSuccessFeedbackRoleArn?: string,
     *     FirehoseFailureFeedbackRoleArn?: string,
     *     HttpSuccessFeedbackRoleArn?: string,
     *     HttpFailureFeedbackRoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
