<?php

namespace Sunaoka\Aws\Structures\Chime\ListAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property string|null $UserEmail
 * @property string|null $NextToken
 * @property int<1, 200>|null $MaxResults
 */
class ListAccountsRequest extends Request
{
    /**
     * @param array{
     *     Name?: string|null,
     *     UserEmail?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 200>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
