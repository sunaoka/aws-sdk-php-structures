<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $service
 * @property string $code
 * @property 'issue'|'accountNotification'|'scheduledChange'|'investigation' $category
 */
class EventType extends Shape
{
    /**
     * @param array{
     *     service?: string,
     *     code?: string,
     *     category?: 'issue'|'accountNotification'|'scheduledChange'|'investigation'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
