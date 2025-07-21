<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\GetDbInstance;

use Sunaoka\Aws\Structures\Response;

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
 * @property list<string> $vpcSubnetIds
 * @property bool|null $publiclyAccessible
 * @property list<string>|null $vpcSecurityGroupIds
 * @property string|null $dbParameterGroupIdentifier
 * @property string|null $availabilityZone
 * @property string|null $secondaryAvailabilityZone
 * @property Shapes\LogDeliveryConfiguration|null $logDeliveryConfiguration
 * @property string|null $influxAuthParametersSecretArn
 * @property string|null $dbClusterId
 * @property 'PRIMARY'|'STANDBY'|'REPLICA'|null $instanceMode
 */
class GetDbInstanceResponse extends Response
{
}
