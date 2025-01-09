<?php

namespace Sunaoka\Aws\Structures\Ec2\AllocateHosts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceFamily
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property 'on'|'off' $HostRecovery
 * @property string $OutpostArn
 * @property 'on'|'off' $HostMaintenance
 * @property list<string> $AssetIds
 * @property 'on'|'off' $AutoPlacement
 * @property string $ClientToken
 * @property string $InstanceType
 * @property int $Quantity
 * @property string $AvailabilityZone
 */
class AllocateHostsRequest extends Request
{
    /**
     * @param array{
     *     InstanceFamily?: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     HostRecovery?: 'on'|'off',
     *     OutpostArn?: string,
     *     HostMaintenance?: 'on'|'off',
     *     AssetIds?: list<string>,
     *     AutoPlacement?: 'on'|'off',
     *     ClientToken?: string,
     *     InstanceType?: string,
     *     Quantity?: int,
     *     AvailabilityZone: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
