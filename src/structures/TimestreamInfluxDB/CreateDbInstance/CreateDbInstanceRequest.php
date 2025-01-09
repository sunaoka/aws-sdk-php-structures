<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\CreateDbInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $username
 * @property string $password
 * @property string $organization
 * @property string $bucket
 * @property 'db.influx.medium'|'db.influx.large'|'db.influx.xlarge'|'db.influx.2xlarge'|'db.influx.4xlarge'|'db.influx.8xlarge'|'db.influx.12xlarge'|'db.influx.16xlarge' $dbInstanceType
 * @property list<string> $vpcSubnetIds
 * @property list<string> $vpcSecurityGroupIds
 * @property bool $publiclyAccessible
 * @property 'InfluxIOIncludedT1'|'InfluxIOIncludedT2'|'InfluxIOIncludedT3' $dbStorageType
 * @property int<20, 16384> $allocatedStorage
 * @property string $dbParameterGroupIdentifier
 * @property 'SINGLE_AZ'|'WITH_MULTIAZ_STANDBY' $deploymentType
 * @property Shapes\LogDeliveryConfiguration $logDeliveryConfiguration
 * @property array<string, string> $tags
 * @property int<1024, 65535> $port
 * @property 'IPV4'|'DUAL' $networkType
 */
class CreateDbInstanceRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     username?: string,
     *     password: string,
     *     organization?: string,
     *     bucket?: string,
     *     dbInstanceType: 'db.influx.medium'|'db.influx.large'|'db.influx.xlarge'|'db.influx.2xlarge'|'db.influx.4xlarge'|'db.influx.8xlarge'|'db.influx.12xlarge'|'db.influx.16xlarge',
     *     vpcSubnetIds: list<string>,
     *     vpcSecurityGroupIds: list<string>,
     *     publiclyAccessible?: bool,
     *     dbStorageType?: 'InfluxIOIncludedT1'|'InfluxIOIncludedT2'|'InfluxIOIncludedT3',
     *     allocatedStorage: int<20, 16384>,
     *     dbParameterGroupIdentifier?: string,
     *     deploymentType?: 'SINGLE_AZ'|'WITH_MULTIAZ_STANDBY',
     *     logDeliveryConfiguration?: Shapes\LogDeliveryConfiguration,
     *     tags?: array<string, string>,
     *     port?: int<1024, 65535>,
     *     networkType?: 'IPV4'|'DUAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
