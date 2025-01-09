<?php

namespace Sunaoka\Aws\Structures\IoTSecureTunneling\DescribeTunnel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $tunnelId
 * @property string $tunnelArn
 * @property 'OPEN'|'CLOSED' $status
 * @property ConnectionState $sourceConnectionState
 * @property ConnectionState $destinationConnectionState
 * @property string $description
 * @property DestinationConfig $destinationConfig
 * @property TimeoutConfig $timeoutConfig
 * @property list<Tag> $tags
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 */
class Tunnel extends Shape
{
    /**
     * @param array{
     *     tunnelId?: string,
     *     tunnelArn?: string,
     *     status?: 'OPEN'|'CLOSED',
     *     sourceConnectionState?: ConnectionState,
     *     destinationConnectionState?: ConnectionState,
     *     description?: string,
     *     destinationConfig?: DestinationConfig,
     *     timeoutConfig?: TimeoutConfig,
     *     tags?: list<Tag>,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
