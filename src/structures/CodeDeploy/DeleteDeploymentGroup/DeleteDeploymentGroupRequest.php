<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\DeleteDeploymentGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationName
 * @property string $deploymentGroupName
 */
class DeleteDeploymentGroupRequest extends Request
{
    /**
     * @param array{
     *     applicationName: string,
     *     deploymentGroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
