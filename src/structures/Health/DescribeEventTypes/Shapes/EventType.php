<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $service
 * @property string|null $code
 * @property 'issue'|'accountNotification'|'scheduledChange'|'investigation'|null $category
 */
class EventType extends Shape
{
    /**
     * @param array{
     *     service?: string|null,
     *     code?: string|null,
     *     category?: 'issue'|'accountNotification'|'scheduledChange'|'investigation'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
