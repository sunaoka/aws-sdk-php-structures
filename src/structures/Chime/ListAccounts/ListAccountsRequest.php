<?php

namespace Sunaoka\Aws\Structures\Chime\ListAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $UserEmail
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListAccountsRequest extends Request
{
    /**
     * @param array{
     *     Name?: string,
     *     UserEmail?: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
