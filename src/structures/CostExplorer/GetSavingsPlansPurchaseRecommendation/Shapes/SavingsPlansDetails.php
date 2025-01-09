<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Region
 * @property string $InstanceFamily
 * @property string $OfferingId
 */
class SavingsPlansDetails extends Shape
{
    /**
     * @param array{
     *     Region?: string,
     *     InstanceFamily?: string,
     *     OfferingId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
