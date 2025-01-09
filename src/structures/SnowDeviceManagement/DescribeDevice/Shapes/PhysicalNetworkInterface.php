<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\DescribeDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $defaultGateway
 * @property string $ipAddress
 * @property 'DHCP'|'STATIC' $ipAddressAssignment
 * @property string $macAddress
 * @property string $netmask
 * @property 'RJ45'|'SFP_PLUS'|'QSFP'|'RJ45_2'|'WIFI' $physicalConnectorType
 * @property string $physicalNetworkInterfaceId
 */
class PhysicalNetworkInterface extends Shape
{
    /**
     * @param array{
     *     defaultGateway?: string,
     *     ipAddress?: string,
     *     ipAddressAssignment?: 'DHCP'|'STATIC',
     *     macAddress?: string,
     *     netmask?: string,
     *     physicalConnectorType?: 'RJ45'|'SFP_PLUS'|'QSFP'|'RJ45_2'|'WIFI',
     *     physicalNetworkInterfaceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
