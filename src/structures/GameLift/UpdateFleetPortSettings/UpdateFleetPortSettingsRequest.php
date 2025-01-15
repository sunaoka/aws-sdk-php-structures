<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateFleetPortSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property list<Shapes\IpPermission>|null $InboundPermissionAuthorizations
 * @property list<Shapes\IpPermission>|null $InboundPermissionRevocations
 */
class UpdateFleetPortSettingsRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     InboundPermissionAuthorizations?: list<Shapes\IpPermission>|null,
     *     InboundPermissionRevocations?: list<Shapes\IpPermission>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
