<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeploymentInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentId
 * @property list<string> $instanceIds
 */
class BatchGetDeploymentInstancesRequest extends Request
{
    /**
     * @param array{
     *     deploymentId: string,
     *     instanceIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
