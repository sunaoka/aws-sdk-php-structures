<?php

namespace Sunaoka\Aws\Structures\SupplyChain\ListInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<0, 20>|null $maxResults
 * @property list<string>|null $instanceNameFilter
 * @property list<'Initializing'|'Active'|'CreateFailed'|'DeleteFailed'|'Deleting'|'Deleted'>|null $instanceStateFilter
 */
class ListInstancesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<0, 20>|null,
     *     instanceNameFilter?: list<string>|null,
     *     instanceStateFilter?: list<'Initializing'|'Active'|'CreateFailed'|'DeleteFailed'|'Deleting'|'Deleted'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
