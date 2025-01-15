<?php

namespace Sunaoka\Aws\Structures\CloudTrail\CreateDashboard;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DashboardArn
 * @property string|null $Name
 * @property 'MANAGED'|'CUSTOM'|null $Type
 * @property list<Shapes\Widget>|null $Widgets
 * @property list<Shapes\Tag>|null $TagsList
 * @property Shapes\RefreshSchedule|null $RefreshSchedule
 * @property bool|null $TerminationProtectionEnabled
 */
class CreateDashboardResponse extends Response
{
}
