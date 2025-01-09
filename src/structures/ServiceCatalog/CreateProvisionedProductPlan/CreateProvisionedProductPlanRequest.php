<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreateProvisionedProductPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $PlanName
 * @property 'CLOUDFORMATION' $PlanType
 * @property list<string> $NotificationArns
 * @property string $PathId
 * @property string $ProductId
 * @property string $ProvisionedProductName
 * @property string $ProvisioningArtifactId
 * @property list<Shapes\UpdateProvisioningParameter> $ProvisioningParameters
 * @property string $IdempotencyToken
 * @property list<Shapes\Tag> $Tags
 */
class CreateProvisionedProductPlanRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     PlanName: string,
     *     PlanType: 'CLOUDFORMATION',
     *     NotificationArns?: list<string>,
     *     PathId?: string,
     *     ProductId: string,
     *     ProvisionedProductName: string,
     *     ProvisioningArtifactId: string,
     *     ProvisioningParameters?: list<Shapes\UpdateProvisioningParameter>,
     *     IdempotencyToken: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
