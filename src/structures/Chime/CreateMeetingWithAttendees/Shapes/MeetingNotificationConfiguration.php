<?php

namespace Sunaoka\Aws\Structures\Chime\CreateMeetingWithAttendees\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SnsTopicArn
 * @property string $SqsQueueArn
 */
class MeetingNotificationConfiguration extends Shape
{
    /**
     * @param array{
     *     SnsTopicArn?: string,
     *     SqsQueueArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
