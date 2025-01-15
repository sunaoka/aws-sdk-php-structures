<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DescribeConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Username
 */
class ConnectionBasicAuthResponseParameters extends Shape
{
    /**
     * @param array{Username?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
