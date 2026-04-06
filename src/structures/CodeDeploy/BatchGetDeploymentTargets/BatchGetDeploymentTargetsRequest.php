<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeploymentTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentId
 * @property list<string> $targetIds
 */
class BatchGetDeploymentTargetsRequest extends Request
{
    /**
     * @param array{
     *     deploymentId: string,
     *     targetIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
