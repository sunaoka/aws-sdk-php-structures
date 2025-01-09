<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CreatedAt
 * @property string $DeploymentArn
 * @property string $DeploymentId
 * @property 'NewDeployment'|'Redeployment'|'ResetDeployment'|'ForceResetDeployment' $DeploymentType
 * @property string $GroupArn
 */
class Deployment extends Shape
{
    /**
     * @param array{
     *     CreatedAt?: string,
     *     DeploymentArn?: string,
     *     DeploymentId?: string,
     *     DeploymentType?: 'NewDeployment'|'Redeployment'|'ResetDeployment'|'ForceResetDeployment',
     *     GroupArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
