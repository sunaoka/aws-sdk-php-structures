<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\CreateDbCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $username
 * @property string $password
 * @property string|null $organization
 * @property string|null $bucket
 * @property int<1024, 65535>|null $port
 * @property string|null $dbParameterGroupIdentifier
 * @property 'db.influx.medium'|'db.influx.large'|'db.influx.xlarge'|'db.influx.2xlarge'|'db.influx.4xlarge'|'db.influx.8xlarge'|'db.influx.12xlarge'|'db.influx.16xlarge' $dbInstanceType
 * @property 'InfluxIOIncludedT1'|'InfluxIOIncludedT2'|'InfluxIOIncludedT3'|null $dbStorageType
 * @property int<20, 15360> $allocatedStorage
 * @property 'IPV4'|'DUAL'|null $networkType
 * @property bool|null $publiclyAccessible
 * @property list<string> $vpcSubnetIds
 * @property list<string> $vpcSecurityGroupIds
 * @property 'MULTI_NODE_READ_REPLICAS' $deploymentType
 * @property 'AUTOMATIC'|'NO_FAILOVER'|null $failoverMode
 * @property Shapes\LogDeliveryConfiguration|null $logDeliveryConfiguration
 * @property array<string, string>|null $tags
 */
class CreateDbClusterRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     username?: string|null,
     *     password: string,
     *     organization?: string|null,
     *     bucket?: string|null,
     *     port?: int<1024, 65535>|null,
     *     dbParameterGroupIdentifier?: string|null,
     *     dbInstanceType: 'db.influx.medium'|'db.influx.large'|'db.influx.xlarge'|'db.influx.2xlarge'|'db.influx.4xlarge'|'db.influx.8xlarge'|'db.influx.12xlarge'|'db.influx.16xlarge',
     *     dbStorageType?: 'InfluxIOIncludedT1'|'InfluxIOIncludedT2'|'InfluxIOIncludedT3'|null,
     *     allocatedStorage: int<20, 15360>,
     *     networkType?: 'IPV4'|'DUAL'|null,
     *     publiclyAccessible?: bool|null,
     *     vpcSubnetIds: list<string>,
     *     vpcSecurityGroupIds: list<string>,
     *     deploymentType: 'MULTI_NODE_READ_REPLICAS',
     *     failoverMode?: 'AUTOMATIC'|'NO_FAILOVER'|null,
     *     logDeliveryConfiguration?: Shapes\LogDeliveryConfiguration|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
