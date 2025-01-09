<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Family
 * @property string $InstanceType
 * @property string $Region
 * @property string $DatabaseEngine
 * @property string $DatabaseEdition
 * @property string $DeploymentOption
 * @property string $LicenseModel
 * @property bool $CurrentGeneration
 * @property bool $SizeFlexEligible
 */
class RDSInstanceDetails extends Shape
{
    /**
     * @param array{
     *     Family?: string,
     *     InstanceType?: string,
     *     Region?: string,
     *     DatabaseEngine?: string,
     *     DatabaseEdition?: string,
     *     DeploymentOption?: string,
     *     LicenseModel?: string,
     *     CurrentGeneration?: bool,
     *     SizeFlexEligible?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
