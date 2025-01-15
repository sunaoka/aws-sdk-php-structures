<?php

namespace Sunaoka\Aws\Structures\Macie2\GetBucketStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SensitivityAggregations|null $classificationError
 * @property SensitivityAggregations|null $notClassified
 * @property SensitivityAggregations|null $notSensitive
 * @property SensitivityAggregations|null $sensitive
 */
class BucketStatisticsBySensitivity extends Shape
{
    /**
     * @param array{
     *     classificationError?: SensitivityAggregations|null,
     *     notClassified?: SensitivityAggregations|null,
     *     notSensitive?: SensitivityAggregations|null,
     *     sensitive?: SensitivityAggregations|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
