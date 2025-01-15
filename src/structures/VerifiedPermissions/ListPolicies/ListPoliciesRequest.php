<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyStoreId
 * @property string|null $nextToken
 * @property int<1, max>|null $maxResults
 * @property Shapes\PolicyFilter|null $filter
 */
class ListPoliciesRequest extends Request
{
    /**
     * @param array{
     *     policyStoreId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, max>|null,
     *     filter?: Shapes\PolicyFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
