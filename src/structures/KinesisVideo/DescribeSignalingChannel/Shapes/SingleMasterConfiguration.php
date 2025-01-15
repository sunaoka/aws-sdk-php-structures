<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DescribeSignalingChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<5, 120>|null $MessageTtlSeconds
 */
class SingleMasterConfiguration extends Shape
{
    /**
     * @param array{MessageTtlSeconds?: int<5, 120>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
