<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeInstance;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property string $IdentityStoreId
 * @property string $InstanceArn
 * @property string $Name
 * @property string $OwnerAccountId
 * @property 'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'ACTIVE' $Status
 */
class DescribeInstanceResponse extends Response
{
}
