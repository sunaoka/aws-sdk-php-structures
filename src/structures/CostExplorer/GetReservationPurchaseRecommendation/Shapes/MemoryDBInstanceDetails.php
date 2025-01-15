<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Family
 * @property string|null $NodeType
 * @property string|null $Region
 * @property bool|null $CurrentGeneration
 * @property bool|null $SizeFlexEligible
 */
class MemoryDBInstanceDetails extends Shape
{
    /**
     * @param array{
     *     Family?: string|null,
     *     NodeType?: string|null,
     *     Region?: string|null,
     *     CurrentGeneration?: bool|null,
     *     SizeFlexEligible?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
