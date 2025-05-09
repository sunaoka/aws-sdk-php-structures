<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeInstance;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $InstanceArn
 * @property string|null $IdentityStoreId
 * @property string|null $OwnerAccountId
 * @property string|null $Name
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property 'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'ACTIVE'|null $Status
 */
class DescribeInstanceResponse extends Response
{
}
