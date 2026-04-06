<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyHosts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'on'|'off'|null $HostRecovery
 * @property string|null $InstanceType
 * @property string|null $InstanceFamily
 * @property 'on'|'off'|null $HostMaintenance
 * @property list<string> $HostIds
 * @property 'on'|'off'|null $AutoPlacement
 */
class ModifyHostsRequest extends Request
{
    /**
     * @param array{
     *     HostRecovery?: 'on'|'off'|null,
     *     InstanceType?: string|null,
     *     InstanceFamily?: string|null,
     *     HostMaintenance?: 'on'|'off'|null,
     *     HostIds: list<string>,
     *     AutoPlacement?: 'on'|'off'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
