<?php

namespace Sunaoka\Aws\Structures\Panorama\ProvisionDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DefaultGateway
 * @property list<string> $Dns
 * @property string $IpAddress
 * @property string $Mask
 */
class StaticIpConnectionInfo extends Shape
{
    /**
     * @param array{
     *     DefaultGateway: string,
     *     Dns: list<string>,
     *     IpAddress: string,
     *     Mask: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
