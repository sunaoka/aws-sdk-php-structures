<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property DatastoreStorage|null $storage
 * @property string|null $arn
 * @property 'CREATING'|'ACTIVE'|'DELETING'|null $status
 * @property RetentionPeriod|null $retentionPeriod
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdateTime
 * @property \Aws\Api\DateTimeResult|null $lastMessageArrivalTime
 * @property FileFormatConfiguration|null $fileFormatConfiguration
 * @property DatastorePartitions|null $datastorePartitions
 */
class Datastore extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     storage?: DatastoreStorage|null,
     *     arn?: string|null,
     *     status?: 'CREATING'|'ACTIVE'|'DELETING'|null,
     *     retentionPeriod?: RetentionPeriod|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult|null,
     *     lastMessageArrivalTime?: \Aws\Api\DateTimeResult|null,
     *     fileFormatConfiguration?: FileFormatConfiguration|null,
     *     datastorePartitions?: DatastorePartitions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
