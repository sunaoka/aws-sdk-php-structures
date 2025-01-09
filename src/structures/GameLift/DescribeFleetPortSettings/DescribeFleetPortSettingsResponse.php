<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetPortSettings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $FleetId
 * @property string $FleetArn
 * @property list<Shapes\IpPermission> $InboundPermissions
 * @property 'PENDING_UPDATE' $UpdateStatus
 * @property string $Location
 */
class DescribeFleetPortSettingsResponse extends Response
{
}
