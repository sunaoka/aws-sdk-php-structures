<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\RestoreFromDbBackup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $dbBackupId
 * @property \Aws\Api\DateTimeResult|null $restoreToTime
 * @property 'NEW_RESOURCE'|'REPLACE_EXISTING'|null $restoreMode
 * @property list<string>|null $vpcSubnetIds
 * @property list<string>|null $vpcSecurityGroupIds
 * @property bool|null $publiclyAccessible
 * @property Shapes\LogDeliveryConfiguration|null $logDeliveryConfiguration
 * @property Shapes\MaintenanceSchedule|null $maintenanceSchedule
 * @property array<string, string>|null $tags
 * @property int<1024, 65535>|null $port
 * @property 'IPV4'|'DUAL'|null $networkType
 * @property 'SINGLE_AZ'|'WITH_MULTIAZ_STANDBY'|'MULTI_NODE_READ_REPLICAS'|null $deploymentType
 * @property list<Shapes\DbBackupConfiguration>|null $dbBackupConfigurations
 * @property string|null $kmsKeyId
 */
class RestoreFromDbBackupRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     dbBackupId: string,
     *     restoreToTime?: \Aws\Api\DateTimeResult|null,
     *     restoreMode?: 'NEW_RESOURCE'|'REPLACE_EXISTING'|null,
     *     vpcSubnetIds?: list<string>|null,
     *     vpcSecurityGroupIds?: list<string>|null,
     *     publiclyAccessible?: bool|null,
     *     logDeliveryConfiguration?: Shapes\LogDeliveryConfiguration|null,
     *     maintenanceSchedule?: Shapes\MaintenanceSchedule|null,
     *     tags?: array<string, string>|null,
     *     port?: int<1024, 65535>|null,
     *     networkType?: 'IPV4'|'DUAL'|null,
     *     deploymentType?: 'SINGLE_AZ'|'WITH_MULTIAZ_STANDBY'|'MULTI_NODE_READ_REPLICAS'|null,
     *     dbBackupConfigurations?: list<Shapes\DbBackupConfiguration>|null,
     *     kmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
