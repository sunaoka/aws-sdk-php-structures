<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityModelResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $LowerBound
 * @property double|null $UpperBound
 * @property double|null $PredictedValue
 * @property double|null $ActualValue
 * @property \Aws\Api\DateTimeResult|null $Date
 * @property 'INCLUDE'|'EXCLUDE'|null $InclusionAnnotation
 */
class StatisticModelResult extends Shape
{
    /**
     * @param array{
     *     LowerBound?: double|null,
     *     UpperBound?: double|null,
     *     PredictedValue?: double|null,
     *     ActualValue?: double|null,
     *     Date?: \Aws\Api\DateTimeResult|null,
     *     InclusionAnnotation?: 'INCLUDE'|'EXCLUDE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
