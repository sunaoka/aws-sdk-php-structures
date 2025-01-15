<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\ListDeploymentInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentId
 * @property string|null $nextToken
 * @property list<'Pending'|'InProgress'|'Succeeded'|'Failed'|'Skipped'|'Unknown'|'Ready'>|null $instanceStatusFilter
 * @property list<'Blue'|'Green'>|null $instanceTypeFilter
 */
class ListDeploymentInstancesRequest extends Request
{
    /**
     * @param array{
     *     deploymentId: string,
     *     nextToken?: string|null,
     *     instanceStatusFilter?: list<'Pending'|'InProgress'|'Succeeded'|'Failed'|'Skipped'|'Unknown'|'Ready'>|null,
     *     instanceTypeFilter?: list<'Blue'|'Green'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
