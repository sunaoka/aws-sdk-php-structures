<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTopicPermissions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TopicId
 * @property string|null $TopicArn
 * @property list<Shapes\ResourcePermission>|null $Permissions
 * @property int|null $Status
 * @property string|null $RequestId
 */
class DescribeTopicPermissionsResponse extends Response
{
}
