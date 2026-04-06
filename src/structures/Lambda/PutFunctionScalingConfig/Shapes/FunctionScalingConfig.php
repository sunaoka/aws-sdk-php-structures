<?php

namespace Sunaoka\Aws\Structures\Lambda\PutFunctionScalingConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 15000>|null $MinExecutionEnvironments
 * @property int<0, 15000>|null $MaxExecutionEnvironments
 */
class FunctionScalingConfig extends Shape
{
    /**
     * @param array{
     *     MinExecutionEnvironments?: int<0, 15000>|null,
     *     MaxExecutionEnvironments?: int<0, 15000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
