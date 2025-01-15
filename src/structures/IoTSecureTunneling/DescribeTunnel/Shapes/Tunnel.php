<?php

namespace Sunaoka\Aws\Structures\IoTSecureTunneling\DescribeTunnel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $tunnelId
 * @property string|null $tunnelArn
 * @property 'OPEN'|'CLOSED'|null $status
 * @property ConnectionState|null $sourceConnectionState
 * @property ConnectionState|null $destinationConnectionState
 * @property string|null $description
 * @property DestinationConfig|null $destinationConfig
 * @property TimeoutConfig|null $timeoutConfig
 * @property list<Tag>|null $tags
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 */
class Tunnel extends Shape
{
    /**
     * @param array{
     *     tunnelId?: string|null,
     *     tunnelArn?: string|null,
     *     status?: 'OPEN'|'CLOSED'|null,
     *     sourceConnectionState?: ConnectionState|null,
     *     destinationConnectionState?: ConnectionState|null,
     *     description?: string|null,
     *     destinationConfig?: DestinationConfig|null,
     *     timeoutConfig?: TimeoutConfig|null,
     *     tags?: list<Tag>|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
