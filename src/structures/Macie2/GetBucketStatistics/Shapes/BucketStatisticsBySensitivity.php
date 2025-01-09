<?php

namespace Sunaoka\Aws\Structures\Macie2\GetBucketStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SensitivityAggregations $classificationError
 * @property SensitivityAggregations $notClassified
 * @property SensitivityAggregations $notSensitive
 * @property SensitivityAggregations $sensitive
 */
class BucketStatisticsBySensitivity extends Shape
{
    /**
     * @param array{
     *     classificationError?: SensitivityAggregations,
     *     notClassified?: SensitivityAggregations,
     *     notSensitive?: SensitivityAggregations,
     *     sensitive?: SensitivityAggregations
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
