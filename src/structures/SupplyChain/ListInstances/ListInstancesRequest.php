<?php

namespace Sunaoka\Aws\Structures\SupplyChain\ListInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int $maxResults
 * @property list<string> $instanceNameFilter
 * @property list<'Initializing'|'Active'|'CreateFailed'|'DeleteFailed'|'Deleting'|'Deleted'> $instanceStateFilter
 */
class ListInstancesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int,
     *     instanceNameFilter?: list<string>,
     *     instanceStateFilter?: list<'Initializing'|'Active'|'CreateFailed'|'DeleteFailed'|'Deleting'|'Deleted'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
