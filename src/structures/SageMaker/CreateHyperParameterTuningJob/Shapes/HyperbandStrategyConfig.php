<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $MinResource
 * @property int<1, max>|null $MaxResource
 */
class HyperbandStrategyConfig extends Shape
{
    /**
     * @param array{
     *     MinResource?: int<1, max>|null,
     *     MaxResource?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
