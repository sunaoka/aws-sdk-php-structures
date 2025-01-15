<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DashboardId
 * @property list<Shapes\DashboardError>|null $Errors
 * @property string|null $Name
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED'|null $ResourceStatus
 * @property string|null $ThemeArn
 * @property Shapes\DashboardVersionDefinition|null $Definition
 * @property int|null $Status
 * @property string|null $RequestId
 * @property Shapes\DashboardPublishOptions|null $DashboardPublishOptions
 */
class DescribeDashboardDefinitionResponse extends Response
{
}
