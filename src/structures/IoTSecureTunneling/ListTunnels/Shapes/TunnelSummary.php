<?php

namespace Sunaoka\Aws\Structures\IoTSecureTunneling\ListTunnels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $tunnelId
 * @property string $tunnelArn
 * @property 'OPEN'|'CLOSED' $status
 * @property string $description
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 */
class TunnelSummary extends Shape
{
    /**
     * @param array{
     *     tunnelId?: string,
     *     tunnelArn?: string,
     *     status?: 'OPEN'|'CLOSED',
     *     description?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
