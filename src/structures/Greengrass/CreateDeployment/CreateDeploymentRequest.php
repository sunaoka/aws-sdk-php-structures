<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AmznClientToken
 * @property string $DeploymentId
 * @property 'NewDeployment'|'Redeployment'|'ResetDeployment'|'ForceResetDeployment' $DeploymentType
 * @property string $GroupId
 * @property string $GroupVersionId
 */
class CreateDeploymentRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string,
     *     DeploymentId?: string,
     *     DeploymentType: 'NewDeployment'|'Redeployment'|'ResetDeployment'|'ForceResetDeployment',
     *     GroupId: string,
     *     GroupVersionId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
