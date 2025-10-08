<?php

namespace Sunaoka\Aws\Structures\Odb\GetDbNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dbNodeId
 * @property string|null $dbNodeArn
 * @property 'AVAILABLE'|'FAILED'|'PROVISIONING'|'TERMINATED'|'TERMINATING'|'UPDATING'|'STOPPING'|'STOPPED'|'STARTING'|null $status
 * @property string|null $statusReason
 * @property string|null $additionalDetails
 * @property string|null $backupIpId
 * @property string|null $backupVnic2Id
 * @property string|null $backupVnicId
 * @property int|null $cpuCoreCount
 * @property int|null $dbNodeStorageSizeInGBs
 * @property string|null $dbServerId
 * @property string|null $dbSystemId
 * @property string|null $faultDomain
 * @property string|null $hostIpId
 * @property string|null $hostname
 * @property string|null $ocid
 * @property string|null $ociResourceAnchorName
 * @property 'VMDB_REBOOT_MIGRATION'|null $maintenanceType
 * @property int|null $memorySizeInGBs
 * @property int|null $softwareStorageSizeInGB
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $timeMaintenanceWindowEnd
 * @property string|null $timeMaintenanceWindowStart
 * @property int|null $totalCpuCoreCount
 * @property string|null $vnic2Id
 * @property string|null $vnicId
 * @property string|null $privateIpAddress
 * @property string|null $floatingIpAddress
 */
class DbNode extends Shape
{
    /**
     * @param array{
     *     dbNodeId?: string|null,
     *     dbNodeArn?: string|null,
     *     status?: 'AVAILABLE'|'FAILED'|'PROVISIONING'|'TERMINATED'|'TERMINATING'|'UPDATING'|'STOPPING'|'STOPPED'|'STARTING'|null,
     *     statusReason?: string|null,
     *     additionalDetails?: string|null,
     *     backupIpId?: string|null,
     *     backupVnic2Id?: string|null,
     *     backupVnicId?: string|null,
     *     cpuCoreCount?: int|null,
     *     dbNodeStorageSizeInGBs?: int|null,
     *     dbServerId?: string|null,
     *     dbSystemId?: string|null,
     *     faultDomain?: string|null,
     *     hostIpId?: string|null,
     *     hostname?: string|null,
     *     ocid?: string|null,
     *     ociResourceAnchorName?: string|null,
     *     maintenanceType?: 'VMDB_REBOOT_MIGRATION'|null,
     *     memorySizeInGBs?: int|null,
     *     softwareStorageSizeInGB?: int|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     timeMaintenanceWindowEnd?: string|null,
     *     timeMaintenanceWindowStart?: string|null,
     *     totalCpuCoreCount?: int|null,
     *     vnic2Id?: string|null,
     *     vnicId?: string|null,
     *     privateIpAddress?: string|null,
     *     floatingIpAddress?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
