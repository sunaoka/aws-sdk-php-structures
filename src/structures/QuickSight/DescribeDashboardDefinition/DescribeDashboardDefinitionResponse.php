<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DashboardId
 * @property list<Shapes\DashboardError> $Errors
 * @property string $Name
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED' $ResourceStatus
 * @property string $ThemeArn
 * @property Shapes\DashboardVersionDefinition $Definition
 * @property int $Status
 * @property string $RequestId
 * @property Shapes\DashboardPublishOptions $DashboardPublishOptions
 */
class DescribeDashboardDefinitionResponse extends Response
{
}
