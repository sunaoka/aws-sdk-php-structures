<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreatePredictor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ParameterRanges|null $ParameterRanges
 */
class HyperParameterTuningJobConfig extends Shape
{
    /**
     * @param array{ParameterRanges?: ParameterRanges|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
