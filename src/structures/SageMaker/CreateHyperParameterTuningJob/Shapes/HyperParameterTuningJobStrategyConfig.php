<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HyperbandStrategyConfig|null $HyperbandStrategyConfig
 */
class HyperParameterTuningJobStrategyConfig extends Shape
{
    /**
     * @param array{HyperbandStrategyConfig?: HyperbandStrategyConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
