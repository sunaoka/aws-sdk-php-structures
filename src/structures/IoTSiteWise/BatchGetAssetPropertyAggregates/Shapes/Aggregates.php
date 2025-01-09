<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchGetAssetPropertyAggregates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $average
 * @property double $count
 * @property double $maximum
 * @property double $minimum
 * @property double $sum
 * @property double $standardDeviation
 */
class Aggregates extends Shape
{
    /**
     * @param array{
     *     average?: double,
     *     count?: double,
     *     maximum?: double,
     *     minimum?: double,
     *     sum?: double,
     *     standardDeviation?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
