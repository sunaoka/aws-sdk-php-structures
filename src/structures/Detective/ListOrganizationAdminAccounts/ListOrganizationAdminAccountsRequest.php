<?php

namespace Sunaoka\Aws\Structures\Detective\ListOrganizationAdminAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 200> $MaxResults
 */
class ListOrganizationAdminAccountsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 200>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
