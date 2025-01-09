<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\GetTagSyncTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $GroupArn
 * @property string $GroupName
 * @property string $TaskArn
 * @property string $TagKey
 * @property string $TagValue
 * @property string $RoleArn
 * @property 'ACTIVE'|'ERROR' $Status
 * @property string $ErrorMessage
 * @property \Aws\Api\DateTimeResult $CreatedAt
 */
class GetTagSyncTaskResponse extends Response
{
}
