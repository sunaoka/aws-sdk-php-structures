<?php

namespace Sunaoka\Aws\Structures\IoTSecureTunneling\DescribeTunnel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONNECTED'|'DISCONNECTED' $status
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 */
class ConnectionState extends Shape
{
    /**
     * @param array{
     *     status?: 'CONNECTED'|'DISCONNECTED',
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
