<?php

namespace Sunaoka\Aws\Structures\mgn\GetNetworkMigrationMapperSegmentConstruct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $constructID
 * @property string|null $constructType
 * @property string|null $name
 * @property string|null $description
 * @property string|null $logicalID
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property array<string, string>|null $properties
 */
class NetworkMigrationMapperSegmentConstruct extends Shape
{
    /**
     * @param array{
     *     constructID?: string|null,
     *     constructType?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     logicalID?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     properties?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
