<?php

namespace Sunaoka\Aws\Structures\Macie2\ListAutomatedDiscoveryAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $accountIds
 * @property int<1, 25>|null $maxResults
 * @property string|null $nextToken
 */
class ListAutomatedDiscoveryAccountsRequest extends Request
{
    /**
     * @param array{
     *     accountIds?: list<string>|null,
     *     maxResults?: int<1, 25>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
