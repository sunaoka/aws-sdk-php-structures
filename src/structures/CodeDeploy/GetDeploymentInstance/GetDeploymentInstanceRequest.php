<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeploymentInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentId
 * @property string $instanceId
 */
class GetDeploymentInstanceRequest extends Request
{
    /**
     * @param array{
     *     deploymentId: string,
     *     instanceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
