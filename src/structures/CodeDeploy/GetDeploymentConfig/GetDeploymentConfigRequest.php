<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeploymentConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentConfigName
 */
class GetDeploymentConfigRequest extends Request
{
    /**
     * @param array{deploymentConfigName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
