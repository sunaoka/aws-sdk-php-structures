<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Family
 * @property string|null $InstanceType
 * @property string|null $Region
 * @property string|null $DatabaseEngine
 * @property string|null $DatabaseEdition
 * @property string|null $DeploymentOption
 * @property string|null $LicenseModel
 * @property bool|null $CurrentGeneration
 * @property bool|null $SizeFlexEligible
 */
class RDSInstanceDetails extends Shape
{
    /**
     * @param array{
     *     Family?: string|null,
     *     InstanceType?: string|null,
     *     Region?: string|null,
     *     DatabaseEngine?: string|null,
     *     DatabaseEdition?: string|null,
     *     DeploymentOption?: string|null,
     *     LicenseModel?: string|null,
     *     CurrentGeneration?: bool|null,
     *     SizeFlexEligible?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
