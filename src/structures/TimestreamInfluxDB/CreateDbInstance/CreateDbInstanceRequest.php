<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\CreateDbInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $username
 * @property string $password
 * @property string|null $organization
 * @property string|null $bucket
 * @property 'db.influx.medium'|'db.influx.large'|'db.influx.xlarge'|'db.influx.2xlarge'|'db.influx.4xlarge'|'db.influx.8xlarge'|'db.influx.12xlarge'|'db.influx.16xlarge' $dbInstanceType
 * @property list<string> $vpcSubnetIds
 * @property list<string> $vpcSecurityGroupIds
 * @property bool|null $publiclyAccessible
 * @property 'InfluxIOIncludedT1'|'InfluxIOIncludedT2'|'InfluxIOIncludedT3'|null $dbStorageType
 * @property int<20, 16384> $allocatedStorage
 * @property string|null $dbParameterGroupIdentifier
 * @property 'SINGLE_AZ'|'WITH_MULTIAZ_STANDBY'|null $deploymentType
 * @property Shapes\LogDeliveryConfiguration|null $logDeliveryConfiguration
 * @property array<string, string>|null $tags
 * @property int<1024, 65535>|null $port
 * @property 'IPV4'|'DUAL'|null $networkType
 */
class CreateDbInstanceRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     username?: string|null,
     *     password: string,
     *     organization?: string|null,
     *     bucket?: string|null,
     *     dbInstanceType: 'db.influx.medium'|'db.influx.large'|'db.influx.xlarge'|'db.influx.2xlarge'|'db.influx.4xlarge'|'db.influx.8xlarge'|'db.influx.12xlarge'|'db.influx.16xlarge',
     *     vpcSubnetIds: list<string>,
     *     vpcSecurityGroupIds: list<string>,
     *     publiclyAccessible?: bool|null,
     *     dbStorageType?: 'InfluxIOIncludedT1'|'InfluxIOIncludedT2'|'InfluxIOIncludedT3'|null,
     *     allocatedStorage: int<20, 16384>,
     *     dbParameterGroupIdentifier?: string|null,
     *     deploymentType?: 'SINGLE_AZ'|'WITH_MULTIAZ_STANDBY'|null,
     *     logDeliveryConfiguration?: Shapes\LogDeliveryConfiguration|null,
     *     tags?: array<string, string>|null,
     *     port?: int<1024, 65535>|null,
     *     networkType?: 'IPV4'|'DUAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
