<?php

namespace Sunaoka\Aws\Structures\drs\ListStagingAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 50> $maxResults
 * @property string $nextToken
 */
class ListStagingAccountsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 50>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
