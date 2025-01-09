<?php

namespace Sunaoka\Aws\Structures\RAM\GetResourceShares;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $resourceShareArns
 * @property 'PENDING'|'ACTIVE'|'FAILED'|'DELETING'|'DELETED' $resourceShareStatus
 * @property 'SELF'|'OTHER-ACCOUNTS' $resourceOwner
 * @property string $name
 * @property list<Shapes\TagFilter> $tagFilters
 * @property string $nextToken
 * @property int<1, 500> $maxResults
 * @property string $permissionArn
 * @property int $permissionVersion
 */
class GetResourceSharesRequest extends Request
{
    /**
     * @param array{
     *     resourceShareArns?: list<string>,
     *     resourceShareStatus?: 'PENDING'|'ACTIVE'|'FAILED'|'DELETING'|'DELETED',
     *     resourceOwner: 'SELF'|'OTHER-ACCOUNTS',
     *     name?: string,
     *     tagFilters?: list<Shapes\TagFilter>,
     *     nextToken?: string,
     *     maxResults?: int<1, 500>,
     *     permissionArn?: string,
     *     permissionVersion?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
