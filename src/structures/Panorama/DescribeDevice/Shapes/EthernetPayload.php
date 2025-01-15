<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STATIC_IP'|'DHCP' $ConnectionType
 * @property StaticIpConnectionInfo|null $StaticIpConnectionInfo
 */
class EthernetPayload extends Shape
{
    /**
     * @param array{
     *     ConnectionType: 'STATIC_IP'|'DHCP',
     *     StaticIpConnectionInfo?: StaticIpConnectionInfo|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
