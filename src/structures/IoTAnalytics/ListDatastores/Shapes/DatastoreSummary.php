<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\ListDatastores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $datastoreName
 * @property DatastoreStorageSummary $datastoreStorage
 * @property 'CREATING'|'ACTIVE'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 * @property \Aws\Api\DateTimeResult $lastMessageArrivalTime
 * @property 'JSON'|'PARQUET' $fileFormatType
 * @property DatastorePartitions $datastorePartitions
 */
class DatastoreSummary extends Shape
{
    /**
     * @param array{
     *     datastoreName?: string,
     *     datastoreStorage?: DatastoreStorageSummary,
     *     status?: 'CREATING'|'ACTIVE'|'DELETING',
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult,
     *     lastMessageArrivalTime?: \Aws\Api\DateTimeResult,
     *     fileFormatType?: 'JSON'|'PARQUET',
     *     datastorePartitions?: DatastorePartitions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
