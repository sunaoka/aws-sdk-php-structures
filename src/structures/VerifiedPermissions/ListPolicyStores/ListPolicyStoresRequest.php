<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListPolicyStores;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<1, max> $maxResults
 */
class ListPolicyStoresRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
