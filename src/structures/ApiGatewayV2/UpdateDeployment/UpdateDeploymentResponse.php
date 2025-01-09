<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateDeployment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $AutoDeployed
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property string $DeploymentId
 * @property 'PENDING'|'FAILED'|'DEPLOYED' $DeploymentStatus
 * @property string $DeploymentStatusMessage
 * @property string $Description
 */
class UpdateDeploymentResponse extends Response
{
}
