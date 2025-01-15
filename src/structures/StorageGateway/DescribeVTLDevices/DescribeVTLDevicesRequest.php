<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeVTLDevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property list<string>|null $VTLDeviceARNs
 * @property string|null $Marker
 * @property int<1, max>|null $Limit
 */
class DescribeVTLDevicesRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     VTLDeviceARNs?: list<string>|null,
     *     Marker?: string|null,
     *     Limit?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
