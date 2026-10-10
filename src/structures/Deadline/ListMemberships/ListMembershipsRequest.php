<?php

namespace Sunaoka\Aws\Structures\Deadline\ListMemberships;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property string $principalId
 * @property string|null $identityStoreId
 * @property string|null $identityCenterRegion
 * @property list<'FARM'|'QUEUE'|'FLEET'|'JOB'>|null $resourceTypes
 */
class ListMembershipsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     principalId: string,
     *     identityStoreId?: string|null,
     *     identityCenterRegion?: string|null,
     *     resourceTypes?: list<'FARM'|'QUEUE'|'FLEET'|'JOB'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
