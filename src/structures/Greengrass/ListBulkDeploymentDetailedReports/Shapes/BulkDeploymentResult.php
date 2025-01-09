<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListBulkDeploymentDetailedReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CreatedAt
 * @property string $DeploymentArn
 * @property string $DeploymentId
 * @property string $DeploymentStatus
 * @property 'NewDeployment'|'Redeployment'|'ResetDeployment'|'ForceResetDeployment' $DeploymentType
 * @property list<ErrorDetail> $ErrorDetails
 * @property string $ErrorMessage
 * @property string $GroupArn
 */
class BulkDeploymentResult extends Shape
{
    /**
     * @param array{
     *     CreatedAt?: string,
     *     DeploymentArn?: string,
     *     DeploymentId?: string,
     *     DeploymentStatus?: string,
     *     DeploymentType?: 'NewDeployment'|'Redeployment'|'ResetDeployment'|'ForceResetDeployment',
     *     ErrorDetails?: list<ErrorDetail>,
     *     ErrorMessage?: string,
     *     GroupArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
