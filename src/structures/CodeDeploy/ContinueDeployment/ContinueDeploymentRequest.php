<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\ContinueDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $deploymentId
 * @property 'READY_WAIT'|'TERMINATION_WAIT'|null $deploymentWaitType
 */
class ContinueDeploymentRequest extends Request
{
    /**
     * @param array{
     *     deploymentId?: string|null,
     *     deploymentWaitType?: 'READY_WAIT'|'TERMINATION_WAIT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
