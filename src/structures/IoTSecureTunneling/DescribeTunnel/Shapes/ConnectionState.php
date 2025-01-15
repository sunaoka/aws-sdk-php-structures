<?php

namespace Sunaoka\Aws\Structures\IoTSecureTunneling\DescribeTunnel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONNECTED'|'DISCONNECTED'|null $status
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 */
class ConnectionState extends Shape
{
    /**
     * @param array{
     *     status?: 'CONNECTED'|'DISCONNECTED'|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
