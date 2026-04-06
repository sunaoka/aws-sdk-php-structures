<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\ListDbClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $arn
 * @property 'CREATING'|'UPDATING'|'DELETING'|'AVAILABLE'|'FAILED'|'DELETED'|'MAINTENANCE'|'UPDATING_INSTANCE_TYPE'|'REBOOTING'|'REBOOT_FAILED'|'PARTIALLY_AVAILABLE'|null $status
 * @property string|null $endpoint
 * @property string|null $readerEndpoint
 * @property int<1024, 65535>|null $port
 * @property 'MULTI_NODE_READ_REPLICAS'|null $deploymentType
 * @property 'db.influx.medium'|'db.influx.large'|'db.influx.xlarge'|'db.influx.2xlarge'|'db.influx.4xlarge'|'db.influx.8xlarge'|'db.influx.12xlarge'|'db.influx.16xlarge'|'db.influx.24xlarge'|null $dbInstanceType
 * @property 'IPV4'|'DUAL'|null $networkType
 * @property 'InfluxIOIncludedT1'|'InfluxIOIncludedT2'|'InfluxIOIncludedT3'|null $dbStorageType
 * @property int<20, 15360>|null $allocatedStorage
 * @property 'INFLUXDB_V2'|'INFLUXDB_V3_CORE'|'INFLUXDB_V3_ENTERPRISE'|null $engineType
 */
class DbClusterSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     arn: string,
     *     status?: 'CREATING'|'UPDATING'|'DELETING'|'AVAILABLE'|'FAILED'|'DELETED'|'MAINTENANCE'|'UPDATING_INSTANCE_TYPE'|'REBOOTING'|'REBOOT_FAILED'|'PARTIALLY_AVAILABLE'|null,
     *     endpoint?: string|null,
     *     readerEndpoint?: string|null,
     *     port?: int<1024, 65535>|null,
     *     deploymentType?: 'MULTI_NODE_READ_REPLICAS'|null,
     *     dbInstanceType?: 'db.influx.medium'|'db.influx.large'|'db.influx.xlarge'|'db.influx.2xlarge'|'db.influx.4xlarge'|'db.influx.8xlarge'|'db.influx.12xlarge'|'db.influx.16xlarge'|'db.influx.24xlarge'|null,
     *     networkType?: 'IPV4'|'DUAL'|null,
     *     dbStorageType?: 'InfluxIOIncludedT1'|'InfluxIOIncludedT2'|'InfluxIOIncludedT3'|null,
     *     allocatedStorage?: int<20, 15360>|null,
     *     engineType?: 'INFLUXDB_V2'|'INFLUXDB_V3_CORE'|'INFLUXDB_V3_ENTERPRISE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
