<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribePredictor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PredictorExecution>|null $PredictorExecutions
 */
class PredictorExecutionDetails extends Shape
{
    /**
     * @param array{PredictorExecutions?: list<PredictorExecution>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
