<?php

namespace Sunaoka\Aws\Structures\Odb\ListAutonomousVirtualMachines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $autonomousVirtualMachineId
 * @property 'AVAILABLE'|'FAILED'|'PROVISIONING'|'TERMINATED'|'TERMINATING'|'UPDATING'|'MAINTENANCE_IN_PROGRESS'|null $status
 * @property string|null $statusReason
 * @property string|null $vmName
 * @property string|null $dbServerId
 * @property string|null $dbServerDisplayName
 * @property int|null $cpuCoreCount
 * @property int|null $memorySizeInGBs
 * @property int|null $dbNodeStorageSizeInGBs
 * @property string|null $clientIpAddress
 * @property string|null $cloudAutonomousVmClusterId
 * @property string|null $ocid
 * @property string|null $ociResourceAnchorName
 */
class AutonomousVirtualMachineSummary extends Shape
{
    /**
     * @param array{
     *     autonomousVirtualMachineId?: string|null,
     *     status?: 'AVAILABLE'|'FAILED'|'PROVISIONING'|'TERMINATED'|'TERMINATING'|'UPDATING'|'MAINTENANCE_IN_PROGRESS'|null,
     *     statusReason?: string|null,
     *     vmName?: string|null,
     *     dbServerId?: string|null,
     *     dbServerDisplayName?: string|null,
     *     cpuCoreCount?: int|null,
     *     memorySizeInGBs?: int|null,
     *     dbNodeStorageSizeInGBs?: int|null,
     *     clientIpAddress?: string|null,
     *     cloudAutonomousVmClusterId?: string|null,
     *     ocid?: string|null,
     *     ociResourceAnchorName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
