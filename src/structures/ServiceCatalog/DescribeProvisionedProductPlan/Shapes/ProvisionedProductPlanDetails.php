<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisionedProductPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $PathId
 * @property string|null $ProductId
 * @property string|null $PlanName
 * @property string|null $PlanId
 * @property string|null $ProvisionProductId
 * @property string|null $ProvisionProductName
 * @property 'CLOUDFORMATION'|null $PlanType
 * @property string|null $ProvisioningArtifactId
 * @property 'CREATE_IN_PROGRESS'|'CREATE_SUCCESS'|'CREATE_FAILED'|'EXECUTE_IN_PROGRESS'|'EXECUTE_SUCCESS'|'EXECUTE_FAILED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $UpdatedTime
 * @property list<string>|null $NotificationArns
 * @property list<UpdateProvisioningParameter>|null $ProvisioningParameters
 * @property list<Tag>|null $Tags
 * @property string|null $StatusMessage
 */
class ProvisionedProductPlanDetails extends Shape
{
    /**
     * @param array{
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     PathId?: string|null,
     *     ProductId?: string|null,
     *     PlanName?: string|null,
     *     PlanId?: string|null,
     *     ProvisionProductId?: string|null,
     *     ProvisionProductName?: string|null,
     *     PlanType?: 'CLOUDFORMATION'|null,
     *     ProvisioningArtifactId?: string|null,
     *     Status?: 'CREATE_IN_PROGRESS'|'CREATE_SUCCESS'|'CREATE_FAILED'|'EXECUTE_IN_PROGRESS'|'EXECUTE_SUCCESS'|'EXECUTE_FAILED'|null,
     *     UpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     NotificationArns?: list<string>|null,
     *     ProvisioningParameters?: list<UpdateProvisioningParameter>|null,
     *     Tags?: list<Tag>|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
