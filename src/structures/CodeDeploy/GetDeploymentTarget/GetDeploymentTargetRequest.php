<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeploymentTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentId
 * @property string $targetId
 */
class GetDeploymentTargetRequest extends Request
{
    /**
     * @param array{
     *     deploymentId: string,
     *     targetId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
