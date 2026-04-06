<?php

namespace Sunaoka\Aws\Structures\EKS\ListEksAnywhereSubscriptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property list<'CREATING'|'ACTIVE'|'UPDATING'|'EXPIRING'|'EXPIRED'|'DELETING'>|null $includeStatus
 */
class ListEksAnywhereSubscriptionsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     includeStatus?: list<'CREATING'|'ACTIVE'|'UPDATING'|'EXPIRING'|'EXPIRED'|'DELETING'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
