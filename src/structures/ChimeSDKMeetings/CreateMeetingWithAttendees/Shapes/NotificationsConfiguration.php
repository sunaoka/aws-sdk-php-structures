<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\CreateMeetingWithAttendees\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LambdaFunctionArn
 * @property string|null $SnsTopicArn
 * @property string|null $SqsQueueArn
 */
class NotificationsConfiguration extends Shape
{
    /**
     * @param array{
     *     LambdaFunctionArn?: string|null,
     *     SnsTopicArn?: string|null,
     *     SqsQueueArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
