<?php

namespace Sunaoka\Aws\Structures\AppConfig\DeleteDeploymentStrategy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeploymentStrategyId
 */
class DeleteDeploymentStrategyRequest extends Request
{
    /**
     * @param array{DeploymentStrategyId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
