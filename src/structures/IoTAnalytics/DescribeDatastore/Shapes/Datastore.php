<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property DatastoreStorage $storage
 * @property string $arn
 * @property 'CREATING'|'ACTIVE'|'DELETING' $status
 * @property RetentionPeriod $retentionPeriod
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 * @property \Aws\Api\DateTimeResult $lastMessageArrivalTime
 * @property FileFormatConfiguration $fileFormatConfiguration
 * @property DatastorePartitions $datastorePartitions
 */
class Datastore extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     storage?: DatastoreStorage,
     *     arn?: string,
     *     status?: 'CREATING'|'ACTIVE'|'DELETING',
     *     retentionPeriod?: RetentionPeriod,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult,
     *     lastMessageArrivalTime?: \Aws\Api\DateTimeResult,
     *     fileFormatConfiguration?: FileFormatConfiguration,
     *     datastorePartitions?: DatastorePartitions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
