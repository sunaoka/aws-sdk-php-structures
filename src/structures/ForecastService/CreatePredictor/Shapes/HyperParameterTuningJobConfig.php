<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreatePredictor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ParameterRanges $ParameterRanges
 */
class HyperParameterTuningJobConfig extends Shape
{
    /**
     * @param array{ParameterRanges?: ParameterRanges} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
