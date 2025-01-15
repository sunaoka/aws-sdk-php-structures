<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListProvisionedProductPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PlanName
 * @property string|null $PlanId
 * @property string|null $ProvisionProductId
 * @property string|null $ProvisionProductName
 * @property 'CLOUDFORMATION'|null $PlanType
 * @property string|null $ProvisioningArtifactId
 */
class ProvisionedProductPlanSummary extends Shape
{
    /**
     * @param array{
     *     PlanName?: string|null,
     *     PlanId?: string|null,
     *     ProvisionProductId?: string|null,
     *     ProvisionProductName?: string|null,
     *     PlanType?: 'CLOUDFORMATION'|null,
     *     ProvisioningArtifactId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
