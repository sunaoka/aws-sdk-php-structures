<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Maximize'|'Minimize' $Type
 * @property string $MetricName
 * @property float $Value
 */
class FinalHyperParameterTuningJobObjectiveMetric extends Shape
{
    /**
     * @param array{
     *     Type?: 'Maximize'|'Minimize',
     *     MetricName: string,
     *     Value: float
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
