<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\ListDbBackups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string|null $name
 * @property string $arn
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'DELETING'|'DELETED'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $expiresAfter
 * @property string|null $dbResourceId
 * @property 'HOURLY'|'DAILY'|'WEEKLY'|'MONTHLY'|'CUSTOM_SCHEDULE'|'ON_DEMAND'|'CONTINUOUS'|null $type
 * @property 'INFLUXDB_V2'|'INFLUXDB_V3_CORE'|'INFLUXDB_V3_ENTERPRISE'|null $engineType
 * @property 'SINGLE_AZ'|'WITH_MULTIAZ_STANDBY'|'MULTI_NODE_READ_REPLICAS'|null $deploymentType
 * @property string|null $kmsKeyId
 */
class DbBackupSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name?: string|null,
     *     arn: string,
     *     status?: 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'DELETING'|'DELETED'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     expiresAfter?: string|null,
     *     dbResourceId?: string|null,
     *     type?: 'HOURLY'|'DAILY'|'WEEKLY'|'MONTHLY'|'CUSTOM_SCHEDULE'|'ON_DEMAND'|'CONTINUOUS'|null,
     *     engineType?: 'INFLUXDB_V2'|'INFLUXDB_V3_CORE'|'INFLUXDB_V3_ENTERPRISE'|null,
     *     deploymentType?: 'SINGLE_AZ'|'WITH_MULTIAZ_STANDBY'|'MULTI_NODE_READ_REPLICAS'|null,
     *     kmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
