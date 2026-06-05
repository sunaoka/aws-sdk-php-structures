<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListUsersIndexCapacity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $awsAccountId
 * @property string|null $namespace
 * @property list<Shapes\UserIndexCapacityFilter>|null $filters
 * @property 'TOTAL_CAPACITY_BYTES'|null $sortBy
 * @property 'ASC'|'DESC'|null $sortOrder
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListUsersIndexCapacityRequest extends Request
{
    /**
     * @param array{
     *     awsAccountId: string,
     *     namespace?: string|null,
     *     filters?: list<Shapes\UserIndexCapacityFilter>|null,
     *     sortBy?: 'TOTAL_CAPACITY_BYTES'|null,
     *     sortOrder?: 'ASC'|'DESC'|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
