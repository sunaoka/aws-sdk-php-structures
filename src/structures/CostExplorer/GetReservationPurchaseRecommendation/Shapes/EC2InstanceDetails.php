<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Family
 * @property string $InstanceType
 * @property string $Region
 * @property string $AvailabilityZone
 * @property string $Platform
 * @property string $Tenancy
 * @property bool $CurrentGeneration
 * @property bool $SizeFlexEligible
 */
class EC2InstanceDetails extends Shape
{
    /**
     * @param array{
     *     Family?: string,
     *     InstanceType?: string,
     *     Region?: string,
     *     AvailabilityZone?: string,
     *     Platform?: string,
     *     Tenancy?: string,
     *     CurrentGeneration?: bool,
     *     SizeFlexEligible?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
