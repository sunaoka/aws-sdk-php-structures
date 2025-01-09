<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyStoreId
 * @property string $nextToken
 * @property int $maxResults
 * @property Shapes\PolicyFilter $filter
 */
class ListPoliciesRequest extends Request
{
    /**
     * @param array{
     *     policyStoreId: string,
     *     nextToken?: string,
     *     maxResults?: int,
     *     filter?: Shapes\PolicyFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
