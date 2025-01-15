<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkTelemetry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BGP'|'IPSEC'|null $Type
 * @property 'UP'|'DOWN'|null $Status
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 */
class ConnectionHealth extends Shape
{
    /**
     * @param array{
     *     Type?: 'BGP'|'IPSEC'|null,
     *     Status?: 'UP'|'DOWN'|null,
     *     Timestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
