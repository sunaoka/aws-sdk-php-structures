<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeploymentGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationName
 * @property string $deploymentGroupName
 */
class GetDeploymentGroupRequest extends Request
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
