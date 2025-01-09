<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EthernetStatus $Ethernet0Status
 * @property EthernetStatus $Ethernet1Status
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property NtpStatus $NtpStatus
 */
class NetworkStatus extends Shape
{
    /**
     * @param array{
     *     Ethernet0Status?: EthernetStatus,
     *     Ethernet1Status?: EthernetStatus,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     NtpStatus?: NtpStatus
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
