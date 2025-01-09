<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetDeploymentStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DeploymentStatus
 * @property 'NewDeployment'|'Redeployment'|'ResetDeployment'|'ForceResetDeployment' $DeploymentType
 * @property list<Shapes\ErrorDetail> $ErrorDetails
 * @property string $ErrorMessage
 * @property string $UpdatedAt
 */
class GetDeploymentStatusResponse extends Response
{
}
