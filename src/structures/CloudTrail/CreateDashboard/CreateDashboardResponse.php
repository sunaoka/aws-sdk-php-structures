<?php

namespace Sunaoka\Aws\Structures\CloudTrail\CreateDashboard;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DashboardArn
 * @property string $Name
 * @property 'MANAGED'|'CUSTOM' $Type
 * @property list<Shapes\Widget> $Widgets
 * @property list<Shapes\Tag> $TagsList
 * @property Shapes\RefreshSchedule $RefreshSchedule
 * @property bool $TerminationProtectionEnabled
 */
class CreateDashboardResponse extends Response
{
}
