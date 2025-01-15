<?php

namespace Sunaoka\Aws\Structures\RAM\GetResourceShares;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $resourceShareArns
 * @property 'PENDING'|'ACTIVE'|'FAILED'|'DELETING'|'DELETED'|null $resourceShareStatus
 * @property 'SELF'|'OTHER-ACCOUNTS' $resourceOwner
 * @property string|null $name
 * @property list<Shapes\TagFilter>|null $tagFilters
 * @property string|null $nextToken
 * @property int<1, 500>|null $maxResults
 * @property string|null $permissionArn
 * @property int|null $permissionVersion
 */
class GetResourceSharesRequest extends Request
{
    /**
     * @param array{
     *     resourceShareArns?: list<string>|null,
     *     resourceShareStatus?: 'PENDING'|'ACTIVE'|'FAILED'|'DELETING'|'DELETED'|null,
     *     resourceOwner: 'SELF'|'OTHER-ACCOUNTS',
     *     name?: string|null,
     *     tagFilters?: list<Shapes\TagFilter>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 500>|null,
     *     permissionArn?: string|null,
     *     permissionVersion?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
