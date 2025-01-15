<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreateProvisionedProductPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string $PlanName
 * @property 'CLOUDFORMATION' $PlanType
 * @property list<string>|null $NotificationArns
 * @property string|null $PathId
 * @property string $ProductId
 * @property string $ProvisionedProductName
 * @property string $ProvisioningArtifactId
 * @property list<Shapes\UpdateProvisioningParameter>|null $ProvisioningParameters
 * @property string $IdempotencyToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateProvisionedProductPlanRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     PlanName: string,
     *     PlanType: 'CLOUDFORMATION',
     *     NotificationArns?: list<string>|null,
     *     PathId?: string|null,
     *     ProductId: string,
     *     ProvisionedProductName: string,
     *     ProvisioningArtifactId: string,
     *     ProvisioningParameters?: list<Shapes\UpdateProvisioningParameter>|null,
     *     IdempotencyToken: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
