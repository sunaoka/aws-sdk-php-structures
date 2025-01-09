<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $MinResource
 * @property int<1, max> $MaxResource
 */
class HyperbandStrategyConfig extends Shape
{
    /**
     * @param array{
     *     MinResource?: int<1, max>,
     *     MaxResource?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
