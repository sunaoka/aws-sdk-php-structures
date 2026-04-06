<?php

namespace Sunaoka\Aws\Structures\Ec2\AllocateHosts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $InstanceFamily
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property 'on'|'off'|null $HostRecovery
 * @property string|null $OutpostArn
 * @property 'on'|'off'|null $HostMaintenance
 * @property list<string>|null $AssetIds
 * @property string|null $AvailabilityZoneId
 * @property 'on'|'off'|null $AutoPlacement
 * @property string|null $ClientToken
 * @property string|null $InstanceType
 * @property int|null $Quantity
 * @property string|null $AvailabilityZone
 */
class AllocateHostsRequest extends Request
{
    /**
     * @param array{
     *     InstanceFamily?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     HostRecovery?: 'on'|'off'|null,
     *     OutpostArn?: string|null,
     *     HostMaintenance?: 'on'|'off'|null,
     *     AssetIds?: list<string>|null,
     *     AvailabilityZoneId?: string|null,
     *     AutoPlacement?: 'on'|'off'|null,
     *     ClientToken?: string|null,
     *     InstanceType?: string|null,
     *     Quantity?: int|null,
     *     AvailabilityZone?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
