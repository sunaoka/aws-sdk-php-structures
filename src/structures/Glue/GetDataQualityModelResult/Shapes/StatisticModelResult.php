<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityModelResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $LowerBound
 * @property double $UpperBound
 * @property double $PredictedValue
 * @property double $ActualValue
 * @property \Aws\Api\DateTimeResult $Date
 * @property 'INCLUDE'|'EXCLUDE' $InclusionAnnotation
 */
class StatisticModelResult extends Shape
{
    /**
     * @param array{
     *     LowerBound?: double,
     *     UpperBound?: double,
     *     PredictedValue?: double,
     *     ActualValue?: double,
     *     Date?: \Aws\Api\DateTimeResult,
     *     InclusionAnnotation?: 'INCLUDE'|'EXCLUDE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
