<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeAccount;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'ENABLED'|'DISABLED' $DedicatedTenancySupport
 * @property string $DedicatedTenancyManagementCidrRange
 * @property 'SOURCE_ACCOUNT'|'TARGET_ACCOUNT' $DedicatedTenancyAccountType
 */
class DescribeAccountResponse extends Response
{
}
