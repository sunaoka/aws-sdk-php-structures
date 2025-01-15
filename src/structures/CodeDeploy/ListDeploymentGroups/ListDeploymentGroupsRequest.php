<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\ListDeploymentGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationName
 * @property string|null $nextToken
 */
class ListDeploymentGroupsRequest extends Request
{
    /**
     * @param array{
     *     applicationName: string,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
