<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CreatedAt
 * @property string|null $DeploymentArn
 * @property string|null $DeploymentId
 * @property 'NewDeployment'|'Redeployment'|'ResetDeployment'|'ForceResetDeployment'|null $DeploymentType
 * @property string|null $GroupArn
 */
class Deployment extends Shape
{
    /**
     * @param array{
     *     CreatedAt?: string|null,
     *     DeploymentArn?: string|null,
     *     DeploymentId?: string|null,
     *     DeploymentType?: 'NewDeployment'|'Redeployment'|'ResetDeployment'|'ForceResetDeployment'|null,
     *     GroupArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
