<?php

namespace Sunaoka\Aws\Structures\Odb\GetDbServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dbServerId
 * @property 'AVAILABLE'|'FAILED'|'PROVISIONING'|'TERMINATED'|'TERMINATING'|'UPDATING'|'MAINTENANCE_IN_PROGRESS'|null $status
 * @property string|null $statusReason
 * @property int|null $cpuCoreCount
 * @property int|null $dbNodeStorageSizeInGBs
 * @property DbServerPatchingDetails|null $dbServerPatchingDetails
 * @property string|null $displayName
 * @property string|null $exadataInfrastructureId
 * @property string|null $ocid
 * @property string|null $ociResourceAnchorName
 * @property int|null $maxCpuCount
 * @property int|null $maxDbNodeStorageInGBs
 * @property int|null $maxMemoryInGBs
 * @property int|null $memorySizeInGBs
 * @property string|null $shape
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property list<string>|null $vmClusterIds
 * @property 'ECPU'|'OCPU'|null $computeModel
 * @property list<string>|null $autonomousVmClusterIds
 * @property list<string>|null $autonomousVirtualMachineIds
 */
class DbServer extends Shape
{
    /**
     * @param array{
     *     dbServerId?: string|null,
     *     status?: 'AVAILABLE'|'FAILED'|'PROVISIONING'|'TERMINATED'|'TERMINATING'|'UPDATING'|'MAINTENANCE_IN_PROGRESS'|null,
     *     statusReason?: string|null,
     *     cpuCoreCount?: int|null,
     *     dbNodeStorageSizeInGBs?: int|null,
     *     dbServerPatchingDetails?: DbServerPatchingDetails|null,
     *     displayName?: string|null,
     *     exadataInfrastructureId?: string|null,
     *     ocid?: string|null,
     *     ociResourceAnchorName?: string|null,
     *     maxCpuCount?: int|null,
     *     maxDbNodeStorageInGBs?: int|null,
     *     maxMemoryInGBs?: int|null,
     *     memorySizeInGBs?: int|null,
     *     shape?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     vmClusterIds?: list<string>|null,
     *     computeModel?: 'ECPU'|'OCPU'|null,
     *     autonomousVmClusterIds?: list<string>|null,
     *     autonomousVirtualMachineIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
