<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\ContinueDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentId
 * @property 'READY_WAIT'|'TERMINATION_WAIT' $deploymentWaitType
 */
class ContinueDeploymentRequest extends Request
{
    /**
     * @param array{
     *     deploymentId?: string,
     *     deploymentWaitType?: 'READY_WAIT'|'TERMINATION_WAIT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
