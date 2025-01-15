<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $VersionArn
 * @property string|null $DashboardId
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED'|null $CreationStatus
 * @property int|null $Status
 * @property string|null $RequestId
 */
class CreateDashboardResponse extends Response
{
}
