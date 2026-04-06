<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListOrganizationAdminAccounts;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\AdminAccount>|null $AdminAccounts
 * @property string|null $NextToken
 * @property 'SecurityHub'|'SecurityHubV2'|null $Feature
 */
class ListOrganizationAdminAccountsResponse extends Response
{
}
