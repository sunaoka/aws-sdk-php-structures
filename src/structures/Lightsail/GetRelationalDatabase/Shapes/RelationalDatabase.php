<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $arn
 * @property string|null $supportCode
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property ResourceLocation|null $location
 * @property 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket'|null $resourceType
 * @property list<Tag>|null $tags
 * @property string|null $relationalDatabaseBlueprintId
 * @property string|null $relationalDatabaseBundleId
 * @property string|null $masterDatabaseName
 * @property RelationalDatabaseHardware|null $hardware
 * @property string|null $state
 * @property string|null $secondaryAvailabilityZone
 * @property bool|null $backupRetentionEnabled
 * @property PendingModifiedRelationalDatabaseValues|null $pendingModifiedValues
 * @property string|null $engine
 * @property string|null $engineVersion
 * @property \Aws\Api\DateTimeResult|null $latestRestorableTime
 * @property string|null $masterUsername
 * @property string|null $parameterApplyStatus
 * @property string|null $preferredBackupWindow
 * @property string|null $preferredMaintenanceWindow
 * @property bool|null $publiclyAccessible
 * @property RelationalDatabaseEndpoint|null $masterEndpoint
 * @property list<PendingMaintenanceAction>|null $pendingMaintenanceActions
 * @property string|null $caCertificateIdentifier
 */
class RelationalDatabase extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     arn?: string|null,
     *     supportCode?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     location?: ResourceLocation|null,
     *     resourceType?: 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket'|null,
     *     tags?: list<Tag>|null,
     *     relationalDatabaseBlueprintId?: string|null,
     *     relationalDatabaseBundleId?: string|null,
     *     masterDatabaseName?: string|null,
     *     hardware?: RelationalDatabaseHardware|null,
     *     state?: string|null,
     *     secondaryAvailabilityZone?: string|null,
     *     backupRetentionEnabled?: bool|null,
     *     pendingModifiedValues?: PendingModifiedRelationalDatabaseValues|null,
     *     engine?: string|null,
     *     engineVersion?: string|null,
     *     latestRestorableTime?: \Aws\Api\DateTimeResult|null,
     *     masterUsername?: string|null,
     *     parameterApplyStatus?: string|null,
     *     preferredBackupWindow?: string|null,
     *     preferredMaintenanceWindow?: string|null,
     *     publiclyAccessible?: bool|null,
     *     masterEndpoint?: RelationalDatabaseEndpoint|null,
     *     pendingMaintenanceActions?: list<PendingMaintenanceAction>|null,
     *     caCertificateIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
