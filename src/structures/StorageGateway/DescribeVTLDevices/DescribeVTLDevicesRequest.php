<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeVTLDevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property list<string> $VTLDeviceARNs
 * @property string $Marker
 * @property int $Limit
 */
class DescribeVTLDevicesRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     VTLDeviceARNs?: list<string>,
     *     Marker?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
