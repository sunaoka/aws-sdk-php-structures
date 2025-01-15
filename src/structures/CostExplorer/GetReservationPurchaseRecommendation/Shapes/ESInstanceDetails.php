<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceClass
 * @property string|null $InstanceSize
 * @property string|null $Region
 * @property bool|null $CurrentGeneration
 * @property bool|null $SizeFlexEligible
 */
class ESInstanceDetails extends Shape
{
    /**
     * @param array{
     *     InstanceClass?: string|null,
     *     InstanceSize?: string|null,
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
