<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\StopDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentId
 * @property bool|null $autoRollbackEnabled
 */
class StopDeploymentRequest extends Request
{
    /**
     * @param array{
     *     deploymentId: string,
     *     autoRollbackEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
