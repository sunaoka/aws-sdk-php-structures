<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $FailedEvents
 */
class EventFilter extends Shape
{
    /**
     * @param array{FailedEvents?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
