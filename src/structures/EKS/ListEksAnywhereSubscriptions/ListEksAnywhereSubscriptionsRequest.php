<?php

namespace Sunaoka\Aws\Structures\EKS\ListEksAnywhereSubscriptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property list<'CREATING'|'ACTIVE'|'UPDATING'|'EXPIRING'|'EXPIRED'|'DELETING'> $includeStatus
 */
class ListEksAnywhereSubscriptionsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     includeStatus?: list<'CREATING'|'ACTIVE'|'UPDATING'|'EXPIRING'|'EXPIRED'|'DELETING'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
