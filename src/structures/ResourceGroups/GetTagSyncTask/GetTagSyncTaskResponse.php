<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\GetTagSyncTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $GroupArn
 * @property string|null $GroupName
 * @property string|null $TaskArn
 * @property string|null $TagKey
 * @property string|null $TagValue
 * @property Shapes\ResourceQuery|null $ResourceQuery
 * @property string|null $RoleArn
 * @property 'ACTIVE'|'ERROR'|null $Status
 * @property string|null $ErrorMessage
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 */
class GetTagSyncTaskResponse extends Response
{
}
