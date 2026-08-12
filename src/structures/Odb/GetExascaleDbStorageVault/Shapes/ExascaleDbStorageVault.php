<?php

namespace Sunaoka\Aws\Structures\Odb\GetExascaleDbStorageVault\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $exascaleDbStorageVaultId
 * @property int|null $additionalFlashCacheInPercent
 * @property list<'SMART_STORAGE'|'BLOCK_STORAGE'>|null $attachedShapeAttributes
 * @property int|null $autoscaleLimitInGBs
 * @property string|null $availabilityZone
 * @property string|null $availabilityZoneId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $description
 * @property string|null $displayName
 * @property list<string>|null $vmClusterArns
 * @property int|null $vmClusterCount
 * @property list<string>|null $vmClusterIds
 * @property string|null $exascaleDbStorageVaultArn
 * @property ExascaleDbStorageDetails|null $highCapacityDatabaseStorage
 * @property bool|null $isAutoscaleEnabled
 * @property string|null $ocid
 * @property string|null $ociResourceAnchorName
 * @property string|null $ociUrl
 * @property float|null $percentProgress
 * @property 'AVAILABLE'|'FAILED'|'PROVISIONING'|'TERMINATED'|'TERMINATING'|'UPDATING'|'MAINTENANCE_IN_PROGRESS'|null $status
 * @property string|null $statusReason
 * @property string|null $timeZone
 */
class ExascaleDbStorageVault extends Shape
{
    /**
     * @param array{
     *     exascaleDbStorageVaultId: string,
     *     additionalFlashCacheInPercent?: int|null,
     *     attachedShapeAttributes?: list<'SMART_STORAGE'|'BLOCK_STORAGE'>|null,
     *     autoscaleLimitInGBs?: int|null,
     *     availabilityZone?: string|null,
     *     availabilityZoneId?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     description?: string|null,
     *     displayName?: string|null,
     *     vmClusterArns?: list<string>|null,
     *     vmClusterCount?: int|null,
     *     vmClusterIds?: list<string>|null,
     *     exascaleDbStorageVaultArn?: string|null,
     *     highCapacityDatabaseStorage?: ExascaleDbStorageDetails|null,
     *     isAutoscaleEnabled?: bool|null,
     *     ocid?: string|null,
     *     ociResourceAnchorName?: string|null,
     *     ociUrl?: string|null,
     *     percentProgress?: float|null,
     *     status?: 'AVAILABLE'|'FAILED'|'PROVISIONING'|'TERMINATED'|'TERMINATING'|'UPDATING'|'MAINTENANCE_IN_PROGRESS'|null,
     *     statusReason?: string|null,
     *     timeZone?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
