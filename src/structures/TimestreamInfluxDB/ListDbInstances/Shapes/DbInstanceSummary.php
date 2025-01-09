<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\ListDbInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $arn
 * @property 'CREATING'|'AVAILABLE'|'DELETING'|'MODIFYING'|'UPDATING'|'DELETED'|'FAILED'|'UPDATING_DEPLOYMENT_TYPE'|'UPDATING_INSTANCE_TYPE' $status
 * @property string $endpoint
 * @property int<1024, 65535> $port
 * @property 'IPV4'|'DUAL' $networkType
 * @property 'db.influx.medium'|'db.influx.large'|'db.influx.xlarge'|'db.influx.2xlarge'|'db.influx.4xlarge'|'db.influx.8xlarge'|'db.influx.12xlarge'|'db.influx.16xlarge' $dbInstanceType
 * @property 'InfluxIOIncludedT1'|'InfluxIOIncludedT2'|'InfluxIOIncludedT3' $dbStorageType
 * @property int<20, 16384> $allocatedStorage
 * @property 'SINGLE_AZ'|'WITH_MULTIAZ_STANDBY' $deploymentType
 */
class DbInstanceSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     arn: string,
     *     status?: 'CREATING'|'AVAILABLE'|'DELETING'|'MODIFYING'|'UPDATING'|'DELETED'|'FAILED'|'UPDATING_DEPLOYMENT_TYPE'|'UPDATING_INSTANCE_TYPE',
     *     endpoint?: string,
     *     port?: int<1024, 65535>,
     *     networkType?: 'IPV4'|'DUAL',
     *     dbInstanceType?: 'db.influx.medium'|'db.influx.large'|'db.influx.xlarge'|'db.influx.2xlarge'|'db.influx.4xlarge'|'db.influx.8xlarge'|'db.influx.12xlarge'|'db.influx.16xlarge',
     *     dbStorageType?: 'InfluxIOIncludedT1'|'InfluxIOIncludedT2'|'InfluxIOIncludedT3',
     *     allocatedStorage?: int<20, 16384>,
     *     deploymentType?: 'SINGLE_AZ'|'WITH_MULTIAZ_STANDBY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
