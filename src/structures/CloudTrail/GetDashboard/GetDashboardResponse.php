<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetDashboard;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DashboardArn
 * @property 'MANAGED'|'CUSTOM'|null $Type
 * @property 'CREATING'|'CREATED'|'UPDATING'|'UPDATED'|'DELETING'|null $Status
 * @property list<Shapes\Widget>|null $Widgets
 * @property Shapes\RefreshSchedule|null $RefreshSchedule
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $UpdatedTimestamp
 * @property string|null $LastRefreshId
 * @property string|null $LastRefreshFailureReason
 * @property bool|null $TerminationProtectionEnabled
 */
class GetDashboardResponse extends Response
{
}
