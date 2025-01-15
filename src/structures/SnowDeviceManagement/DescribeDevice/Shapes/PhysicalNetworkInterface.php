<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\DescribeDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $defaultGateway
 * @property string|null $ipAddress
 * @property 'DHCP'|'STATIC'|null $ipAddressAssignment
 * @property string|null $macAddress
 * @property string|null $netmask
 * @property 'RJ45'|'SFP_PLUS'|'QSFP'|'RJ45_2'|'WIFI'|null $physicalConnectorType
 * @property string|null $physicalNetworkInterfaceId
 */
class PhysicalNetworkInterface extends Shape
{
    /**
     * @param array{
     *     defaultGateway?: string|null,
     *     ipAddress?: string|null,
     *     ipAddressAssignment?: 'DHCP'|'STATIC'|null,
     *     macAddress?: string|null,
     *     netmask?: string|null,
     *     physicalConnectorType?: 'RJ45'|'SFP_PLUS'|'QSFP'|'RJ45_2'|'WIFI'|null,
     *     physicalNetworkInterfaceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
