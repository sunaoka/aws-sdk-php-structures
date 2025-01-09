<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\CreateDbInstance;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $name
 * @property string $arn
 * @property 'CREATING'|'AVAILABLE'|'DELETING'|'MODIFYING'|'UPDATING'|'DELETED'|'FAILED'|'UPDATING_DEPLOYMENT_TYPE'|'UPDATING_INSTANCE_TYPE' $status
 * @property string $endpoint
 * @property int $port
 * @property 'IPV4'|'DUAL' $networkType
 * @property 'db.influx.medium'|'db.influx.large'|'db.influx.xlarge'|'db.influx.2xlarge'|'db.influx.4xlarge'|'db.influx.8xlarge'|'db.influx.12xlarge'|'db.influx.16xlarge' $dbInstanceType
 * @property 'InfluxIOIncludedT1'|'InfluxIOIncludedT2'|'InfluxIOIncludedT3' $dbStorageType
 * @property int $allocatedStorage
 * @property 'SINGLE_AZ'|'WITH_MULTIAZ_STANDBY' $deploymentType
 * @property list<string> $vpcSubnetIds
 * @property bool $publiclyAccessible
 * @property list<string> $vpcSecurityGroupIds
 * @property string $dbParameterGroupIdentifier
 * @property string $availabilityZone
 * @property string $secondaryAvailabilityZone
 * @property Shapes\LogDeliveryConfiguration $logDeliveryConfiguration
 * @property string $influxAuthParametersSecretArn
 */
class CreateDbInstanceResponse extends Response
{
}
