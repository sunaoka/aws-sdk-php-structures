<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetObjectTypeAttributeStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $P5
 * @property double $P25
 * @property double $P50
 * @property double $P75
 * @property double $P95
 */
class GetObjectTypeAttributeStatisticsPercentiles extends Shape
{
    /**
     * @param array{
     *     P5: double,
     *     P25: double,
     *     P50: double,
     *     P75: double,
     *     P95: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
