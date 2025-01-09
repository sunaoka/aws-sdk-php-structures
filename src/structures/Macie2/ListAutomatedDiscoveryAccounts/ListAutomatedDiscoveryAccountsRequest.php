<?php

namespace Sunaoka\Aws\Structures\Macie2\ListAutomatedDiscoveryAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $accountIds
 * @property int $maxResults
 * @property string $nextToken
 */
class ListAutomatedDiscoveryAccountsRequest extends Request
{
    /**
     * @param array{
     *     accountIds?: list<string>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
