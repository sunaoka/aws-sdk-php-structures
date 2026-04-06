<?php

namespace Sunaoka\Aws\Structures\Odb\GetCloudExadataInfrastructure\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $cloudExadataInfrastructureId
 * @property string|null $displayName
 * @property 'AVAILABLE'|'FAILED'|'PROVISIONING'|'TERMINATED'|'TERMINATING'|'UPDATING'|'MAINTENANCE_IN_PROGRESS'|null $status
 * @property string|null $statusReason
 * @property string|null $cloudExadataInfrastructureArn
 * @property int|null $activatedStorageCount
 * @property int|null $additionalStorageCount
 * @property int|null $availableStorageSizeInGBs
 * @property string|null $availabilityZone
 * @property string|null $availabilityZoneId
 * @property int|null $computeCount
 * @property int|null $cpuCount
 * @property list<CustomerContact>|null $customerContactsToSendToOCI
 * @property double|null $dataStorageSizeInTBs
 * @property int|null $dbNodeStorageSizeInGBs
 * @property string|null $dbServerVersion
 * @property string|null $lastMaintenanceRunId
 * @property MaintenanceWindow|null $maintenanceWindow
 * @property int|null $maxCpuCount
 * @property double|null $maxDataStorageInTBs
 * @property int|null $maxDbNodeStorageSizeInGBs
 * @property int|null $maxMemoryInGBs
 * @property int|null $memorySizeInGBs
 * @property string|null $monthlyDbServerVersion
 * @property string|null $monthlyStorageServerVersion
 * @property string|null $nextMaintenanceRunId
 * @property string|null $ociResourceAnchorName
 * @property string|null $ociUrl
 * @property string|null $ocid
 * @property string|null $shape
 * @property int|null $storageCount
 * @property string|null $storageServerVersion
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property int|null $totalStorageSizeInGBs
 * @property float|null $percentProgress
 * @property string|null $databaseServerType
 * @property string|null $storageServerType
 * @property 'ECPU'|'OCPU'|null $computeModel
 */
class CloudExadataInfrastructure extends Shape
{
    /**
     * @param array{
     *     cloudExadataInfrastructureId: string,
     *     displayName?: string|null,
     *     status?: 'AVAILABLE'|'FAILED'|'PROVISIONING'|'TERMINATED'|'TERMINATING'|'UPDATING'|'MAINTENANCE_IN_PROGRESS'|null,
     *     statusReason?: string|null,
     *     cloudExadataInfrastructureArn?: string|null,
     *     activatedStorageCount?: int|null,
     *     additionalStorageCount?: int|null,
     *     availableStorageSizeInGBs?: int|null,
     *     availabilityZone?: string|null,
     *     availabilityZoneId?: string|null,
     *     computeCount?: int|null,
     *     cpuCount?: int|null,
     *     customerContactsToSendToOCI?: list<CustomerContact>|null,
     *     dataStorageSizeInTBs?: double|null,
     *     dbNodeStorageSizeInGBs?: int|null,
     *     dbServerVersion?: string|null,
     *     lastMaintenanceRunId?: string|null,
     *     maintenanceWindow?: MaintenanceWindow|null,
     *     maxCpuCount?: int|null,
     *     maxDataStorageInTBs?: double|null,
     *     maxDbNodeStorageSizeInGBs?: int|null,
     *     maxMemoryInGBs?: int|null,
     *     memorySizeInGBs?: int|null,
     *     monthlyDbServerVersion?: string|null,
     *     monthlyStorageServerVersion?: string|null,
     *     nextMaintenanceRunId?: string|null,
     *     ociResourceAnchorName?: string|null,
     *     ociUrl?: string|null,
     *     ocid?: string|null,
     *     shape?: string|null,
     *     storageCount?: int|null,
     *     storageServerVersion?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     totalStorageSizeInGBs?: int|null,
     *     percentProgress?: float|null,
     *     databaseServerType?: string|null,
     *     storageServerType?: string|null,
     *     computeModel?: 'ECPU'|'OCPU'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
