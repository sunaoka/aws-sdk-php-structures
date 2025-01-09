<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DynamoDBCapacityDetails $DynamoDBCapacityDetails
 */
class ReservedCapacityDetails extends Shape
{
    /**
     * @param array{DynamoDBCapacityDetails?: DynamoDBCapacityDetails} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
