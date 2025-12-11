<?php

namespace Sunaoka\Aws\Structures\QuickSight\GetFlowPermissions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $FlowId
 * @property list<Shapes\Permission> $Permissions
 * @property string|null $RequestId
 * @property int|null $Status
 */
class GetFlowPermissionsResponse extends Response
{
}
