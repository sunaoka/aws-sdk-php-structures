<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\GetAssetPropertyAggregates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $average
 * @property double|null $count
 * @property double|null $maximum
 * @property double|null $minimum
 * @property double|null $sum
 * @property double|null $standardDeviation
 */
class Aggregates extends Shape
{
    /**
     * @param array{
     *     average?: double|null,
     *     count?: double|null,
     *     maximum?: double|null,
     *     minimum?: double|null,
     *     sum?: double|null,
     *     standardDeviation?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
