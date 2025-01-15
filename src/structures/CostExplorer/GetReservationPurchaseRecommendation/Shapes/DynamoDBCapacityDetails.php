<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CapacityUnits
 * @property string|null $Region
 */
class DynamoDBCapacityDetails extends Shape
{
    /**
     * @param array{
     *     CapacityUnits?: string|null,
     *     Region?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
