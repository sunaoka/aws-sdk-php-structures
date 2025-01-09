<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property string $supportCode
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property ResourceLocation $location
 * @property 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket' $resourceType
 * @property list<Tag> $tags
 * @property string $relationalDatabaseBlueprintId
 * @property string $relationalDatabaseBundleId
 * @property string $masterDatabaseName
 * @property RelationalDatabaseHardware $hardware
 * @property string $state
 * @property string $secondaryAvailabilityZone
 * @property bool $backupRetentionEnabled
 * @property PendingModifiedRelationalDatabaseValues $pendingModifiedValues
 * @property string $engine
 * @property string $engineVersion
 * @property \Aws\Api\DateTimeResult $latestRestorableTime
 * @property string $masterUsername
 * @property string $parameterApplyStatus
 * @property string $preferredBackupWindow
 * @property string $preferredMaintenanceWindow
 * @property bool $publiclyAccessible
 * @property RelationalDatabaseEndpoint $masterEndpoint
 * @property list<PendingMaintenanceAction> $pendingMaintenanceActions
 * @property string $caCertificateIdentifier
 */
class RelationalDatabase extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     arn?: string,
     *     supportCode?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     location?: ResourceLocation,
     *     resourceType?: 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket',
     *     tags?: list<Tag>,
     *     relationalDatabaseBlueprintId?: string,
     *     relationalDatabaseBundleId?: string,
     *     masterDatabaseName?: string,
     *     hardware?: RelationalDatabaseHardware,
     *     state?: string,
     *     secondaryAvailabilityZone?: string,
     *     backupRetentionEnabled?: bool,
     *     pendingModifiedValues?: PendingModifiedRelationalDatabaseValues,
     *     engine?: string,
     *     engineVersion?: string,
     *     latestRestorableTime?: \Aws\Api\DateTimeResult,
     *     masterUsername?: string,
     *     parameterApplyStatus?: string,
     *     preferredBackupWindow?: string,
     *     preferredMaintenanceWindow?: string,
     *     publiclyAccessible?: bool,
     *     masterEndpoint?: RelationalDatabaseEndpoint,
     *     pendingMaintenanceActions?: list<PendingMaintenanceAction>,
     *     caCertificateIdentifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
