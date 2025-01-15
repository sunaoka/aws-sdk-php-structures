<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PotentialDisconnectIssue
 */
class DisconnectDetails extends Shape
{
    /**
     * @param array{PotentialDisconnectIssue?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
