<?php

namespace Sunaoka\Aws\Structures\EventBridge\DescribeConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DescribeConnectionResourceParameters $ResourceParameters
 */
class DescribeConnectionConnectivityParameters extends Shape
{
    /**
     * @param array{ResourceParameters: DescribeConnectionResourceParameters} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
