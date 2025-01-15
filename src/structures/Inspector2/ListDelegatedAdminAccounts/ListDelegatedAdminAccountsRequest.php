<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListDelegatedAdminAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 5>|null $maxResults
 * @property string|null $nextToken
 */
class ListDelegatedAdminAccountsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 5>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
