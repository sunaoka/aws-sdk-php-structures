<?php

namespace Sunaoka\Aws\Structures\EventBridge\DescribeConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Username
 */
class ConnectionBasicAuthResponseParameters extends Shape
{
    /**
     * @param array{Username?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
