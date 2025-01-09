<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetDataQualityResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property MetricBasedObservation $MetricBasedObservation
 */
class DataQualityObservation extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     MetricBasedObservation?: MetricBasedObservation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
