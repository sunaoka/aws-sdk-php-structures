<?php

namespace Sunaoka\Aws\Structures\Ecs\ListContainerInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 * @property string $filter
 * @property string $nextToken
 * @property int $maxResults
 * @property 'ACTIVE'|'DRAINING'|'REGISTERING'|'DEREGISTERING'|'REGISTRATION_FAILED' $status
 */
class ListContainerInstancesRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string,
     *     filter?: string,
     *     nextToken?: string,
     *     maxResults?: int,
     *     status?: 'ACTIVE'|'DRAINING'|'REGISTERING'|'DEREGISTERING'|'REGISTRATION_FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
