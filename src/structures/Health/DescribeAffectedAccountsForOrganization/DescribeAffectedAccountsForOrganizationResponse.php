<?php

namespace Sunaoka\Aws\Structures\Health\DescribeAffectedAccountsForOrganization;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string>|null $affectedAccounts
 * @property 'PUBLIC'|'ACCOUNT_SPECIFIC'|'NONE'|null $eventScopeCode
 * @property string|null $nextToken
 */
class DescribeAffectedAccountsForOrganizationResponse extends Response
{
}
