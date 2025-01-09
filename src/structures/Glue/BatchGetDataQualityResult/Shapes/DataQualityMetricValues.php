<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetDataQualityResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $ActualValue
 * @property double $ExpectedValue
 * @property double $LowerLimit
 * @property double $UpperLimit
 */
class DataQualityMetricValues extends Shape
{
    /**
     * @param array{
     *     ActualValue?: double,
     *     ExpectedValue?: double,
     *     LowerLimit?: double,
     *     UpperLimit?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
