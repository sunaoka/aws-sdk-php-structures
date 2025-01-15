<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $eventArn
 * @property string|null $errorName
 * @property string|null $errorMessage
 */
class EventDetailsErrorItem extends Shape
{
    /**
     * @param array{
     *     eventArn?: string|null,
     *     errorName?: string|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
