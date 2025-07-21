<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\ListDbInstancesForCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $arn
 * @property 'CREATING'|'AVAILABLE'|'DELETING'|'MODIFYING'|'UPDATING'|'DELETED'|'FAILED'|'UPDATING_DEPLOYMENT_TYPE'|'UPDATING_INSTANCE_TYPE'|null $status
 * @property string|null $endpoint
 * @property int<1024, 65535>|null $port
 * @property 'IPV4'|'DUAL'|null $networkType
 * @property 'db.influx.medium'|'db.influx.large'|'db.influx.xlarge'|'db.influx.2xlarge'|'db.influx.4xlarge'|'db.influx.8xlarge'|'db.influx.12xlarge'|'db.influx.16xlarge'|'db.influx.24xlarge'|null $dbInstanceType
 * @property 'InfluxIOIncludedT1'|'InfluxIOIncludedT2'|'InfluxIOIncludedT3'|null $dbStorageType
 * @property int<20, 15360>|null $allocatedStorage
 * @property 'SINGLE_AZ'|'WITH_MULTIAZ_STANDBY'|null $deploymentType
 * @property 'PRIMARY'|'STANDBY'|'REPLICA'|null $instanceMode
 */
class DbInstanceForClusterSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     arn: string,
     *     status?: 'CREATING'|'AVAILABLE'|'DELETING'|'MODIFYING'|'UPDATING'|'DELETED'|'FAILED'|'UPDATING_DEPLOYMENT_TYPE'|'UPDATING_INSTANCE_TYPE'|null,
     *     endpoint?: string|null,
     *     port?: int<1024, 65535>|null,
     *     networkType?: 'IPV4'|'DUAL'|null,
     *     dbInstanceType?: 'db.influx.medium'|'db.influx.large'|'db.influx.xlarge'|'db.influx.2xlarge'|'db.influx.4xlarge'|'db.influx.8xlarge'|'db.influx.12xlarge'|'db.influx.16xlarge'|'db.influx.24xlarge'|null,
     *     dbStorageType?: 'InfluxIOIncludedT1'|'InfluxIOIncludedT2'|'InfluxIOIncludedT3'|null,
     *     allocatedStorage?: int<20, 15360>|null,
     *     deploymentType?: 'SINGLE_AZ'|'WITH_MULTIAZ_STANDBY'|null,
     *     instanceMode?: 'PRIMARY'|'STANDBY'|'REPLICA'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
