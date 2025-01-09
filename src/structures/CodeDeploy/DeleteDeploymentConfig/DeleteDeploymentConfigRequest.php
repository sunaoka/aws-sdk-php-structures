<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\DeleteDeploymentConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentConfigName
 */
class DeleteDeploymentConfigRequest extends Request
{
    /**
     * @param array{deploymentConfigName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
