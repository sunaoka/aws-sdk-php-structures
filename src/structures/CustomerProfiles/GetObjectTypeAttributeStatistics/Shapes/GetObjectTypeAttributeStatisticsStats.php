<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetObjectTypeAttributeStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Maximum
 * @property double $Minimum
 * @property double $Average
 * @property double $StandardDeviation
 * @property GetObjectTypeAttributeStatisticsPercentiles $Percentiles
 */
class GetObjectTypeAttributeStatisticsStats extends Shape
{
    /**
     * @param array{
     *     Maximum: double,
     *     Minimum: double,
     *     Average: double,
     *     StandardDeviation: double,
     *     Percentiles: GetObjectTypeAttributeStatisticsPercentiles
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
