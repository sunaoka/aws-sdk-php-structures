<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeploymentTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $deploymentId
 * @property string|null $targetId
 */
class GetDeploymentTargetRequest extends Request
{
    /**
     * @param array{
     *     deploymentId?: string|null,
     *     targetId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
