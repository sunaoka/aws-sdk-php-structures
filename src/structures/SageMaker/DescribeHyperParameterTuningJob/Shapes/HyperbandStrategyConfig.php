<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MinResource
 * @property int $MaxResource
 */
class HyperbandStrategyConfig extends Shape
{
    /**
     * @param array{
     *     MinResource?: int,
     *     MaxResource?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
