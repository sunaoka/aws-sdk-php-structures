<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListProvisionedProductPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PlanName
 * @property string $PlanId
 * @property string $ProvisionProductId
 * @property string $ProvisionProductName
 * @property 'CLOUDFORMATION' $PlanType
 * @property string $ProvisioningArtifactId
 */
class ProvisionedProductPlanSummary extends Shape
{
    /**
     * @param array{
     *     PlanName?: string,
     *     PlanId?: string,
     *     ProvisionProductId?: string,
     *     ProvisionProductName?: string,
     *     PlanType?: 'CLOUDFORMATION',
     *     ProvisioningArtifactId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
