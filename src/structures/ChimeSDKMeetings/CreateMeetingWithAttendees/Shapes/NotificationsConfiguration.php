<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\CreateMeetingWithAttendees\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LambdaFunctionArn
 * @property string $SnsTopicArn
 * @property string $SqsQueueArn
 */
class NotificationsConfiguration extends Shape
{
    /**
     * @param array{
     *     LambdaFunctionArn?: string,
     *     SnsTopicArn?: string,
     *     SqsQueueArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
