<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetDataQualityResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property MetricBasedObservation|null $MetricBasedObservation
 */
class DataQualityObservation extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     MetricBasedObservation?: MetricBasedObservation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
