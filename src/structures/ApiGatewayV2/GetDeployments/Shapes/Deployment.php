<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AutoDeployed
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property string|null $DeploymentId
 * @property 'PENDING'|'FAILED'|'DEPLOYED'|null $DeploymentStatus
 * @property string|null $DeploymentStatusMessage
 * @property string|null $Description
 */
class Deployment extends Shape
{
    /**
     * @param array{
     *     AutoDeployed?: bool|null,
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     DeploymentId?: string|null,
     *     DeploymentStatus?: 'PENDING'|'FAILED'|'DEPLOYED'|null,
     *     DeploymentStatusMessage?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
