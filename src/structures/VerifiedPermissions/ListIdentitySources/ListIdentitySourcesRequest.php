<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListIdentitySources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyStoreId
 * @property string|null $nextToken
 * @property int<1, max>|null $maxResults
 * @property list<Shapes\IdentitySourceFilter>|null $filters
 */
class ListIdentitySourcesRequest extends Request
{
    /**
     * @param array{
     *     policyStoreId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, max>|null,
     *     filters?: list<Shapes\IdentitySourceFilter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
