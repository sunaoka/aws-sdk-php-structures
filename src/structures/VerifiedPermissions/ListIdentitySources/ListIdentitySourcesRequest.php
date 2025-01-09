<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListIdentitySources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyStoreId
 * @property string $nextToken
 * @property int<1, max> $maxResults
 * @property list<Shapes\IdentitySourceFilter> $filters
 */
class ListIdentitySourcesRequest extends Request
{
    /**
     * @param array{
     *     policyStoreId: string,
     *     nextToken?: string,
     *     maxResults?: int<1, max>,
     *     filters?: list<Shapes\IdentitySourceFilter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
