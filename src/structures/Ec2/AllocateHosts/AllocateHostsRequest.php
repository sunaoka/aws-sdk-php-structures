<?php

namespace Sunaoka\Aws\Structures\Ec2\AllocateHosts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'on'|'off'|null $AutoPlacement
 * @property string $AvailabilityZone
 * @property string|null $ClientToken
 * @property string|null $InstanceType
 * @property string|null $InstanceFamily
 * @property int|null $Quantity
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property 'on'|'off'|null $HostRecovery
 * @property string|null $OutpostArn
 * @property 'on'|'off'|null $HostMaintenance
 * @property list<string>|null $AssetIds
 */
class AllocateHostsRequest extends Request
{
    /**
     * @param array{
     *     AutoPlacement?: 'on'|'off'|null,
     *     AvailabilityZone: string,
     *     ClientToken?: string|null,
     *     InstanceType?: string|null,
     *     InstanceFamily?: string|null,
     *     Quantity?: int|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     HostRecovery?: 'on'|'off'|null,
     *     OutpostArn?: string|null,
     *     HostMaintenance?: 'on'|'off'|null,
     *     AssetIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
