<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListPolicyStoreAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, max>|null $maxResults
 * @property Shapes\PolicyStoreAliasFilter|null $filter
 */
class ListPolicyStoreAliasesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, max>|null,
     *     filter?: Shapes\PolicyStoreAliasFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
