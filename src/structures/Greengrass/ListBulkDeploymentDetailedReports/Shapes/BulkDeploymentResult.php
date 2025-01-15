<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListBulkDeploymentDetailedReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CreatedAt
 * @property string|null $DeploymentArn
 * @property string|null $DeploymentId
 * @property string|null $DeploymentStatus
 * @property 'NewDeployment'|'Redeployment'|'ResetDeployment'|'ForceResetDeployment'|null $DeploymentType
 * @property list<ErrorDetail>|null $ErrorDetails
 * @property string|null $ErrorMessage
 * @property string|null $GroupArn
 */
class BulkDeploymentResult extends Shape
{
    /**
     * @param array{
     *     CreatedAt?: string|null,
     *     DeploymentArn?: string|null,
     *     DeploymentId?: string|null,
     *     DeploymentStatus?: string|null,
     *     DeploymentType?: 'NewDeployment'|'Redeployment'|'ResetDeployment'|'ForceResetDeployment'|null,
     *     ErrorDetails?: list<ErrorDetail>|null,
     *     ErrorMessage?: string|null,
     *     GroupArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
