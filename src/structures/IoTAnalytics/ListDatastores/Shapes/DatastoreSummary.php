<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\ListDatastores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $datastoreName
 * @property DatastoreStorageSummary|null $datastoreStorage
 * @property 'CREATING'|'ACTIVE'|'DELETING'|null $status
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdateTime
 * @property \Aws\Api\DateTimeResult|null $lastMessageArrivalTime
 * @property 'JSON'|'PARQUET'|null $fileFormatType
 * @property DatastorePartitions|null $datastorePartitions
 */
class DatastoreSummary extends Shape
{
    /**
     * @param array{
     *     datastoreName?: string|null,
     *     datastoreStorage?: DatastoreStorageSummary|null,
     *     status?: 'CREATING'|'ACTIVE'|'DELETING'|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult|null,
     *     lastMessageArrivalTime?: \Aws\Api\DateTimeResult|null,
     *     fileFormatType?: 'JSON'|'PARQUET'|null,
     *     datastorePartitions?: DatastorePartitions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
