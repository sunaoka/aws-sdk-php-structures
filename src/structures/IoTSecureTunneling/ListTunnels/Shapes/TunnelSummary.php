<?php

namespace Sunaoka\Aws\Structures\IoTSecureTunneling\ListTunnels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $tunnelId
 * @property string|null $tunnelArn
 * @property 'OPEN'|'CLOSED'|null $status
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 */
class TunnelSummary extends Shape
{
    /**
     * @param array{
     *     tunnelId?: string|null,
     *     tunnelArn?: string|null,
     *     status?: 'OPEN'|'CLOSED'|null,
     *     description?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
