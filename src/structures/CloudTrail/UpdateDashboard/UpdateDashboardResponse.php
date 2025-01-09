<?php

namespace Sunaoka\Aws\Structures\CloudTrail\UpdateDashboard;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DashboardArn
 * @property string $Name
 * @property 'MANAGED'|'CUSTOM' $Type
 * @property list<Shapes\Widget> $Widgets
 * @property Shapes\RefreshSchedule $RefreshSchedule
 * @property bool $TerminationProtectionEnabled
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 */
class UpdateDashboardResponse extends Response
{
}
