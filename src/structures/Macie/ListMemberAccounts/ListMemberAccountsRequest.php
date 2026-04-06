<?php

namespace Sunaoka\Aws\Structures\Macie\ListMemberAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<min, 250>|null $maxResults
 */
class ListMemberAccountsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<min, 250>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
