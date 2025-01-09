<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\StopDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentId
 * @property bool $autoRollbackEnabled
 */
class StopDeploymentRequest extends Request
{
    /**
     * @param array{
     *     deploymentId: string,
     *     autoRollbackEnabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
