<?php

namespace Sunaoka\Aws\Structures\mgn\ListManagedAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListManagedAccountsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
