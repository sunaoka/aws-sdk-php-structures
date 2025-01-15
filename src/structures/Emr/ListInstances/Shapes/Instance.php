<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Ec2InstanceId
 * @property string|null $PublicDnsName
 * @property string|null $PublicIpAddress
 * @property string|null $PrivateDnsName
 * @property string|null $PrivateIpAddress
 * @property InstanceStatus|null $Status
 * @property string|null $InstanceGroupId
 * @property string|null $InstanceFleetId
 * @property 'ON_DEMAND'|'SPOT'|null $Market
 * @property string|null $InstanceType
 * @property list<EbsVolume>|null $EbsVolumes
 */
class Instance extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Ec2InstanceId?: string|null,
     *     PublicDnsName?: string|null,
     *     PublicIpAddress?: string|null,
     *     PrivateDnsName?: string|null,
     *     PrivateIpAddress?: string|null,
     *     Status?: InstanceStatus|null,
     *     InstanceGroupId?: string|null,
     *     InstanceFleetId?: string|null,
     *     Market?: 'ON_DEMAND'|'SPOT'|null,
     *     InstanceType?: string|null,
     *     EbsVolumes?: list<EbsVolume>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
