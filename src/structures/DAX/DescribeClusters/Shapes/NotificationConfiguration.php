<?php

namespace Sunaoka\Aws\Structures\DAX\DescribeClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TopicArn
 * @property string|null $TopicStatus
 */
class NotificationConfiguration extends Shape
{
    /**
     * @param array{
     *     TopicArn?: string|null,
     *     TopicStatus?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
