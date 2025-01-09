<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GatewayId
 * @property string $GatewayARN
 * @property string $GatewayType
 * @property string $GatewayOperationalState
 * @property string $GatewayName
 * @property string $Ec2InstanceId
 * @property string $Ec2InstanceRegion
 * @property 'VMWARE'|'HYPER-V'|'EC2'|'KVM'|'OTHER'|'SNOWBALL' $HostEnvironment
 * @property string $HostEnvironmentId
 * @property string $DeprecationDate
 * @property string $SoftwareVersion
 */
class GatewayInfo extends Shape
{
    /**
     * @param array{
     *     GatewayId?: string,
     *     GatewayARN?: string,
     *     GatewayType?: string,
     *     GatewayOperationalState?: string,
     *     GatewayName?: string,
     *     Ec2InstanceId?: string,
     *     Ec2InstanceRegion?: string,
     *     HostEnvironment?: 'VMWARE'|'HYPER-V'|'EC2'|'KVM'|'OTHER'|'SNOWBALL',
     *     HostEnvironmentId?: string,
     *     DeprecationDate?: string,
     *     SoftwareVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
