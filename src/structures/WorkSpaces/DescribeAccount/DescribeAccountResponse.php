<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeAccount;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'ENABLED'|'DISABLED'|null $DedicatedTenancySupport
 * @property string|null $DedicatedTenancyManagementCidrRange
 * @property 'SOURCE_ACCOUNT'|'TARGET_ACCOUNT'|null $DedicatedTenancyAccountType
 * @property string|null $Message
 */
class DescribeAccountResponse extends Response
{
}
