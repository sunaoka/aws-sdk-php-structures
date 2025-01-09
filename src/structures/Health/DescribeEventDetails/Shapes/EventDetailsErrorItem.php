<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventArn
 * @property string $errorName
 * @property string $errorMessage
 */
class EventDetailsErrorItem extends Shape
{
    /**
     * @param array{
     *     eventArn?: string,
     *     errorName?: string,
     *     errorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
