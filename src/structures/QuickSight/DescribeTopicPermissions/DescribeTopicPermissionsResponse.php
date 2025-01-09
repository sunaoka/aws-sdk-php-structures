<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTopicPermissions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TopicId
 * @property string $TopicArn
 * @property list<Shapes\ResourcePermission> $Permissions
 * @property int $Status
 * @property string $RequestId
 */
class DescribeTopicPermissionsResponse extends Response
{
}
