<?php

namespace Sunaoka\Aws\Structures\Ecs\ListContainerInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $cluster
 * @property string|null $filter
 * @property string|null $nextToken
 * @property int|null $maxResults
 * @property 'ACTIVE'|'DRAINING'|'REGISTERING'|'DEREGISTERING'|'REGISTRATION_FAILED'|null $status
 */
class ListContainerInstancesRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string|null,
     *     filter?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int|null,
     *     status?: 'ACTIVE'|'DRAINING'|'REGISTERING'|'DEREGISTERING'|'REGISTRATION_FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
