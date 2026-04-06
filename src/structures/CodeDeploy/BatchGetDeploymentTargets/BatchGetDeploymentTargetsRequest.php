<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeploymentTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $deploymentId
 * @property list<string>|null $targetIds
 */
class BatchGetDeploymentTargetsRequest extends Request
{
    /**
     * @param array{
     *     deploymentId?: string|null,
     *     targetIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
