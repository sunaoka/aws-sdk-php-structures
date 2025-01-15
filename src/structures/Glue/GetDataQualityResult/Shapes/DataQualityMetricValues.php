<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $ActualValue
 * @property double|null $ExpectedValue
 * @property double|null $LowerLimit
 * @property double|null $UpperLimit
 */
class DataQualityMetricValues extends Shape
{
    /**
     * @param array{
     *     ActualValue?: double|null,
     *     ExpectedValue?: double|null,
     *     LowerLimit?: double|null,
     *     UpperLimit?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
