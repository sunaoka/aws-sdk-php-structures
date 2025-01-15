<?php

namespace Sunaoka\Aws\Structures\Chime\CreateMeeting\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SnsTopicArn
 * @property string|null $SqsQueueArn
 */
class MeetingNotificationConfiguration extends Shape
{
    /**
     * @param array{
     *     SnsTopicArn?: string|null,
     *     SqsQueueArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
