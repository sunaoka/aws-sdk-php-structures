<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Maximize'|'Minimize'|null $Type
 * @property string $MetricName
 * @property float $Value
 */
class FinalHyperParameterTuningJobObjectiveMetric extends Shape
{
    /**
     * @param array{
     *     Type?: 'Maximize'|'Minimize'|null,
     *     MetricName: string,
     *     Value: float
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
