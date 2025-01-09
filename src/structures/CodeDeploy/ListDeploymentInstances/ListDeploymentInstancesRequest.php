<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\ListDeploymentInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentId
 * @property string $nextToken
 * @property list<'Pending'|'InProgress'|'Succeeded'|'Failed'|'Skipped'|'Unknown'|'Ready'> $instanceStatusFilter
 * @property list<'Blue'|'Green'> $instanceTypeFilter
 */
class ListDeploymentInstancesRequest extends Request
{
    /**
     * @param array{
     *     deploymentId: string,
     *     nextToken?: string,
     *     instanceStatusFilter?: list<'Pending'|'InProgress'|'Succeeded'|'Failed'|'Skipped'|'Unknown'|'Ready'>,
     *     instanceTypeFilter?: list<'Blue'|'Green'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
