<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Maximize'|'Minimize' $Type
 * @property string $MetricName
 */
class HyperParameterTuningJobObjective extends Shape
{
    /**
     * @param array{
     *     Type: 'Maximize'|'Minimize',
     *     MetricName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
