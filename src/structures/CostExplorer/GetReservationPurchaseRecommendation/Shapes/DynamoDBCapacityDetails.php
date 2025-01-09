<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CapacityUnits
 * @property string $Region
 */
class DynamoDBCapacityDetails extends Shape
{
    /**
     * @param array{
     *     CapacityUnits?: string,
     *     Region?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
