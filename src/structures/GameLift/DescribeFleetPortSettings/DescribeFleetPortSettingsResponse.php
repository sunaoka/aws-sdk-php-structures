<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetPortSettings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $FleetId
 * @property string|null $FleetArn
 * @property list<Shapes\IpPermission>|null $InboundPermissions
 * @property 'PENDING_UPDATE'|null $UpdateStatus
 * @property string|null $Location
 */
class DescribeFleetPortSettingsResponse extends Response
{
}
