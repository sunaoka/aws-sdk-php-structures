<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PotentialDisconnectIssue
 */
class DisconnectDetails extends Shape
{
    /**
     * @param array{PotentialDisconnectIssue?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
