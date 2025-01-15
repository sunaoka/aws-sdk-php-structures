<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetDeploymentStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DeploymentStatus
 * @property 'NewDeployment'|'Redeployment'|'ResetDeployment'|'ForceResetDeployment'|null $DeploymentType
 * @property list<Shapes\ErrorDetail>|null $ErrorDetails
 * @property string|null $ErrorMessage
 * @property string|null $UpdatedAt
 */
class GetDeploymentStatusResponse extends Response
{
}
