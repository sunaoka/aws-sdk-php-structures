<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Family
 * @property string $NodeType
 * @property string $Region
 * @property bool $CurrentGeneration
 * @property bool $SizeFlexEligible
 */
class MemoryDBInstanceDetails extends Shape
{
    /**
     * @param array{
     *     Family?: string,
     *     NodeType?: string,
     *     Region?: string,
     *     CurrentGeneration?: bool,
     *     SizeFlexEligible?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
