<?php

namespace Sunaoka\Aws\Structures\KeyspacesStreams\GetRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $eventVersion
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property 'USER'|'REPLICATION'|'TTL'|null $origin
 * @property array<string, KeyspacesCellValue>|null $partitionKeys
 * @property array<string, KeyspacesCellValue>|null $clusteringKeys
 * @property KeyspacesRow|null $newImage
 * @property KeyspacesRow|null $oldImage
 * @property string|null $sequenceNumber
 */
class Record extends Shape
{
    /**
     * @param array{
     *     eventVersion?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     origin?: 'USER'|'REPLICATION'|'TTL'|null,
     *     partitionKeys?: array<string, KeyspacesCellValue>|null,
     *     clusteringKeys?: array<string, KeyspacesCellValue>|null,
     *     newImage?: KeyspacesRow|null,
     *     oldImage?: KeyspacesRow|null,
     *     sequenceNumber?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
