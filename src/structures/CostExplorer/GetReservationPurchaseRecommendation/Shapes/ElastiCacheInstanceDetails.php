<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Family
 * @property string $NodeType
 * @property string $Region
 * @property string $ProductDescription
 * @property bool $CurrentGeneration
 * @property bool $SizeFlexEligible
 */
class ElastiCacheInstanceDetails extends Shape
{
    /**
     * @param array{
     *     Family?: string,
     *     NodeType?: string,
     *     Region?: string,
     *     ProductDescription?: string,
     *     CurrentGeneration?: bool,
     *     SizeFlexEligible?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
