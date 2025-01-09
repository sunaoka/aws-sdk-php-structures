<?php

namespace Sunaoka\Aws\Structures\Health\DescribeAffectedAccountsForOrganization;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string> $affectedAccounts
 * @property 'PUBLIC'|'ACCOUNT_SPECIFIC'|'NONE' $eventScopeCode
 * @property string $nextToken
 */
class DescribeAffectedAccountsForOrganizationResponse extends Response
{
}
