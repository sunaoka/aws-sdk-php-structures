<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceClass
 * @property string $InstanceSize
 * @property string $Region
 * @property bool $CurrentGeneration
 * @property bool $SizeFlexEligible
 */
class ESInstanceDetails extends Shape
{
    /**
     * @param array{
     *     InstanceClass?: string,
     *     InstanceSize?: string,
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
