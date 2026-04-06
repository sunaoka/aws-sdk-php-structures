<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GatewayId
 * @property string|null $GatewayARN
 * @property string|null $GatewayType
 * @property string|null $GatewayOperationalState
 * @property string|null $GatewayName
 * @property string|null $Ec2InstanceId
 * @property string|null $Ec2InstanceRegion
 * @property 'VMWARE'|'HYPER-V'|'EC2'|'KVM'|'OTHER'|'SNOWBALL'|null $HostEnvironment
 * @property string|null $HostEnvironmentId
 * @property string|null $DeprecationDate
 * @property string|null $SoftwareVersion
 */
class GatewayInfo extends Shape
{
    /**
     * @param array{
     *     GatewayId?: string|null,
     *     GatewayARN?: string|null,
     *     GatewayType?: string|null,
     *     GatewayOperationalState?: string|null,
     *     GatewayName?: string|null,
     *     Ec2InstanceId?: string|null,
     *     Ec2InstanceRegion?: string|null,
     *     HostEnvironment?: 'VMWARE'|'HYPER-V'|'EC2'|'KVM'|'OTHER'|'SNOWBALL'|null,
     *     HostEnvironmentId?: string|null,
     *     DeprecationDate?: string|null,
     *     SoftwareVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
