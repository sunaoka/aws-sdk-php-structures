<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Ec2InstanceId
 * @property string $PublicDnsName
 * @property string $PublicIpAddress
 * @property string $PrivateDnsName
 * @property string $PrivateIpAddress
 * @property InstanceStatus $Status
 * @property string $InstanceGroupId
 * @property string $InstanceFleetId
 * @property 'ON_DEMAND'|'SPOT' $Market
 * @property string $InstanceType
 * @property list<EbsVolume> $EbsVolumes
 */
class Instance extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Ec2InstanceId?: string,
     *     PublicDnsName?: string,
     *     PublicIpAddress?: string,
     *     PrivateDnsName?: string,
     *     PrivateIpAddress?: string,
     *     Status?: InstanceStatus,
     *     InstanceGroupId?: string,
     *     InstanceFleetId?: string,
     *     Market?: 'ON_DEMAND'|'SPOT',
     *     InstanceType?: string,
     *     EbsVolumes?: list<EbsVolume>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
