<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisionedProductPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $PathId
 * @property string $ProductId
 * @property string $PlanName
 * @property string $PlanId
 * @property string $ProvisionProductId
 * @property string $ProvisionProductName
 * @property 'CLOUDFORMATION' $PlanType
 * @property string $ProvisioningArtifactId
 * @property 'CREATE_IN_PROGRESS'|'CREATE_SUCCESS'|'CREATE_FAILED'|'EXECUTE_IN_PROGRESS'|'EXECUTE_SUCCESS'|'EXECUTE_FAILED' $Status
 * @property \Aws\Api\DateTimeResult $UpdatedTime
 * @property list<string> $NotificationArns
 * @property list<UpdateProvisioningParameter> $ProvisioningParameters
 * @property list<Tag> $Tags
 * @property string $StatusMessage
 */
class ProvisionedProductPlanDetails extends Shape
{
    /**
     * @param array{
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     PathId?: string,
     *     ProductId?: string,
     *     PlanName?: string,
     *     PlanId?: string,
     *     ProvisionProductId?: string,
     *     ProvisionProductName?: string,
     *     PlanType?: 'CLOUDFORMATION',
     *     ProvisioningArtifactId?: string,
     *     Status?: 'CREATE_IN_PROGRESS'|'CREATE_SUCCESS'|'CREATE_FAILED'|'EXECUTE_IN_PROGRESS'|'EXECUTE_SUCCESS'|'EXECUTE_FAILED',
     *     UpdatedTime?: \Aws\Api\DateTimeResult,
     *     NotificationArns?: list<string>,
     *     ProvisioningParameters?: list<UpdateProvisioningParameter>,
     *     Tags?: list<Tag>,
     *     StatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
