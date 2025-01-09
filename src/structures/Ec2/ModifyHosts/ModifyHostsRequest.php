<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyHosts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'on'|'off' $HostRecovery
 * @property string $InstanceType
 * @property string $InstanceFamily
 * @property 'on'|'off' $HostMaintenance
 * @property list<string> $HostIds
 * @property 'on'|'off' $AutoPlacement
 */
class ModifyHostsRequest extends Request
{
    /**
     * @param array{
     *     HostRecovery?: 'on'|'off',
     *     InstanceType?: string,
     *     InstanceFamily?: string,
     *     HostMaintenance?: 'on'|'off',
     *     HostIds: list<string>,
     *     AutoPlacement?: 'on'|'off'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
