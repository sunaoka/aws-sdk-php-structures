<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\AssociateAvailabilityZones;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $UpdateToken
 * @property string|null $FirewallArn
 * @property string|null $FirewallName
 * @property list<Shapes\AvailabilityZoneMapping> $AvailabilityZoneMappings
 * @property 'FIREWALL'|'IGW_FIREWALL'|null $FirewallType
 */
class AssociateAvailabilityZonesRequest extends Request
{
    /**
     * @param array{
     *     UpdateToken?: string|null,
     *     FirewallArn?: string|null,
     *     FirewallName?: string|null,
     *     AvailabilityZoneMappings: list<Shapes\AvailabilityZoneMapping>,
     *     FirewallType?: 'FIREWALL'|'IGW_FIREWALL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
