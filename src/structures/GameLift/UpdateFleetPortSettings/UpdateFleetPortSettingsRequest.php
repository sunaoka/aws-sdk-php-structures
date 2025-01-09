<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateFleetPortSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property list<Shapes\IpPermission> $InboundPermissionAuthorizations
 * @property list<Shapes\IpPermission> $InboundPermissionRevocations
 */
class UpdateFleetPortSettingsRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     InboundPermissionAuthorizations?: list<Shapes\IpPermission>,
     *     InboundPermissionRevocations?: list<Shapes\IpPermission>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
