<?php

namespace Sunaoka\Aws\Structures\CloudTrail\UpdateDashboard;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DashboardArn
 * @property string|null $Name
 * @property 'MANAGED'|'CUSTOM'|null $Type
 * @property list<Shapes\Widget>|null $Widgets
 * @property Shapes\RefreshSchedule|null $RefreshSchedule
 * @property bool|null $TerminationProtectionEnabled
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $UpdatedTimestamp
 */
class UpdateDashboardResponse extends Response
{
}
