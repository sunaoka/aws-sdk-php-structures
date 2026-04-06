<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListOrganizationAdminAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 10>|null $MaxResults
 * @property string|null $NextToken
 * @property 'SecurityHub'|'SecurityHubV2'|null $Feature
 */
class ListOrganizationAdminAccountsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 10>|null,
     *     NextToken?: string|null,
     *     Feature?: 'SecurityHub'|'SecurityHubV2'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
