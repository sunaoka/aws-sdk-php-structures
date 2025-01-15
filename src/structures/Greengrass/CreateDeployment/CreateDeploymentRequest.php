<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AmznClientToken
 * @property string|null $DeploymentId
 * @property 'NewDeployment'|'Redeployment'|'ResetDeployment'|'ForceResetDeployment' $DeploymentType
 * @property string $GroupId
 * @property string|null $GroupVersionId
 */
class CreateDeploymentRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string|null,
     *     DeploymentId?: string|null,
     *     DeploymentType: 'NewDeployment'|'Redeployment'|'ResetDeployment'|'ForceResetDeployment',
     *     GroupId: string,
     *     GroupVersionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
