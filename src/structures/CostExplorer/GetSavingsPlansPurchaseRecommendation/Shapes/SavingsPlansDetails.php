<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Region
 * @property string|null $InstanceFamily
 * @property string|null $OfferingId
 */
class SavingsPlansDetails extends Shape
{
    /**
     * @param array{
     *     Region?: string|null,
     *     InstanceFamily?: string|null,
     *     OfferingId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
