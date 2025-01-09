<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetDashboard;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DashboardArn
 * @property 'MANAGED'|'CUSTOM' $Type
 * @property 'CREATING'|'CREATED'|'UPDATING'|'UPDATED'|'DELETING' $Status
 * @property list<Shapes\Widget> $Widgets
 * @property Shapes\RefreshSchedule $RefreshSchedule
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 * @property string $LastRefreshId
 * @property string $LastRefreshFailureReason
 * @property bool $TerminationProtectionEnabled
 */
class GetDashboardResponse extends Response
{
}
