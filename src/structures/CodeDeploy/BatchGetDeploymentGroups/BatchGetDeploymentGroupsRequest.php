<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeploymentGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationName
 * @property list<string> $deploymentGroupNames
 */
class BatchGetDeploymentGroupsRequest extends Request
{
    /**
     * @param array{
     *     applicationName: string,
     *     deploymentGroupNames: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
