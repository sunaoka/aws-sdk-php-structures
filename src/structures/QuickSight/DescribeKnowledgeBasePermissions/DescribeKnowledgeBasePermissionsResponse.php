<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeKnowledgeBasePermissions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $KnowledgeBaseArn
 * @property string $KnowledgeBaseId
 * @property list<Shapes\ResourcePermission>|null $Permissions
 * @property string|null $RequestId
 * @property int|null $Status
 */
class DescribeKnowledgeBasePermissionsResponse extends Response
{
}
