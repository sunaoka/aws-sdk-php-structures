<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Family
 * @property string|null $InstanceType
 * @property string|null $Region
 * @property string|null $AvailabilityZone
 * @property string|null $Platform
 * @property string|null $Tenancy
 * @property bool|null $CurrentGeneration
 * @property bool|null $SizeFlexEligible
 */
class EC2InstanceDetails extends Shape
{
    /**
     * @param array{
     *     Family?: string|null,
     *     InstanceType?: string|null,
     *     Region?: string|null,
     *     AvailabilityZone?: string|null,
     *     Platform?: string|null,
     *     Tenancy?: string|null,
     *     CurrentGeneration?: bool|null,
     *     SizeFlexEligible?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
