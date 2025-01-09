<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListDelegatedAdminAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 5> $maxResults
 * @property string $nextToken
 */
class ListDelegatedAdminAccountsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 5>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
