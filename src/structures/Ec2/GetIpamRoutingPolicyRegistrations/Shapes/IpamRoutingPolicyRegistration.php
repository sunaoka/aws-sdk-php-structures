<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamRoutingPolicyRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Cidr
 * @property list<string>|null $Asns
 * @property bool|null $PermitMoreSpecificAnnouncements
 * @property int<0, 48>|null $MaxLength
 * @property string|null $Description
 * @property string|null $LatestDeltaId
 * @property 'pending-activate'|'activate-failed'|'create-in-progress'|'create-complete'|'update-in-progress'|'update-complete'|'delete-in-progress'|'delete-complete'|null $State
 */
class IpamRoutingPolicyRegistration extends Shape
{
    /**
     * @param array{
     *     Cidr?: string|null,
     *     Asns?: list<string>|null,
     *     PermitMoreSpecificAnnouncements?: bool|null,
     *     MaxLength?: int<0, 48>|null,
     *     Description?: string|null,
     *     LatestDeltaId?: string|null,
     *     State?: 'pending-activate'|'activate-failed'|'create-in-progress'|'create-complete'|'update-in-progress'|'update-complete'|'delete-in-progress'|'delete-complete'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
