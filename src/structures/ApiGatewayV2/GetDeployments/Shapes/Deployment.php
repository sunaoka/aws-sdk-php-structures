<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AutoDeployed
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property string $DeploymentId
 * @property 'PENDING'|'FAILED'|'DEPLOYED' $DeploymentStatus
 * @property string $DeploymentStatusMessage
 * @property string $Description
 */
class Deployment extends Shape
{
    /**
     * @param array{
     *     AutoDeployed?: bool,
     *     CreatedDate?: \Aws\Api\DateTimeResult,
     *     DeploymentId?: string,
     *     DeploymentStatus?: 'PENDING'|'FAILED'|'DEPLOYED',
     *     DeploymentStatusMessage?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
