<?php

namespace Sunaoka\Aws\Structures\Chime\ListAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $UserEmail
 * @property string $NextToken
 * @property int<1, 200> $MaxResults
 */
class ListAccountsRequest extends Request
{
    /**
     * @param array{
     *     Name?: string,
     *     UserEmail?: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 200>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
