<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HyperbandStrategyConfig $HyperbandStrategyConfig
 */
class HyperParameterTuningJobStrategyConfig extends Shape
{
    /**
     * @param array{HyperbandStrategyConfig?: HyperbandStrategyConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
