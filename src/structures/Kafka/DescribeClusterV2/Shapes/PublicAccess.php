<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 */
class PublicAccess extends Shape
{
    /**
     * @param array{Type?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
