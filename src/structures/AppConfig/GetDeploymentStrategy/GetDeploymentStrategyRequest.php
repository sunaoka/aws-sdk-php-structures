<?php

namespace Sunaoka\Aws\Structures\AppConfig\GetDeploymentStrategy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeploymentStrategyId
 */
class GetDeploymentStrategyRequest extends Request
{
    /**
     * @param array{DeploymentStrategyId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
