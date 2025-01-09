<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkTelemetry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BGP'|'IPSEC' $Type
 * @property 'UP'|'DOWN' $Status
 * @property \Aws\Api\DateTimeResult $Timestamp
 */
class ConnectionHealth extends Shape
{
    /**
     * @param array{
     *     Type?: 'BGP'|'IPSEC',
     *     Status?: 'UP'|'DOWN',
     *     Timestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
