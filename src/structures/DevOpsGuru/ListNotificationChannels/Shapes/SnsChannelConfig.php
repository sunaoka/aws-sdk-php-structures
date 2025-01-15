<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListNotificationChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TopicArn
 */
class SnsChannelConfig extends Shape
{
    /**
     * @param array{TopicArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
