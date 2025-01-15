<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EthernetStatus|null $Ethernet0Status
 * @property EthernetStatus|null $Ethernet1Status
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property NtpStatus|null $NtpStatus
 */
class NetworkStatus extends Shape
{
    /**
     * @param array{
     *     Ethernet0Status?: EthernetStatus|null,
     *     Ethernet1Status?: EthernetStatus|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     NtpStatus?: NtpStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
