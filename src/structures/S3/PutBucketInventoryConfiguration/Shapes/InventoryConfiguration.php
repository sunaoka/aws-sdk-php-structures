<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketInventoryConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InventoryDestination $Destination
 * @property bool $IsEnabled
 * @property InventoryFilter|null $Filter
 * @property string $Id
 * @property 'All'|'Current' $IncludedObjectVersions
 * @property list<'Size'|'LastModifiedDate'|'StorageClass'|'ETag'|'IsMultipartUploaded'|'ReplicationStatus'|'EncryptionStatus'|'ObjectLockRetainUntilDate'|'ObjectLockMode'|'ObjectLockLegalHoldStatus'|'IntelligentTieringAccessTier'|'BucketKeyStatus'|'ChecksumAlgorithm'|'ObjectAccessControlList'|'ObjectOwner'>|null $OptionalFields
 * @property InventorySchedule $Schedule
 */
class InventoryConfiguration extends Shape
{
    /**
     * @param array{
     *     Destination: InventoryDestination,
     *     IsEnabled: bool,
     *     Filter?: InventoryFilter|null,
     *     Id: string,
     *     IncludedObjectVersions: 'All'|'Current',
     *     OptionalFields?: list<'Size'|'LastModifiedDate'|'StorageClass'|'ETag'|'IsMultipartUploaded'|'ReplicationStatus'|'EncryptionStatus'|'ObjectLockRetainUntilDate'|'ObjectLockMode'|'ObjectLockLegalHoldStatus'|'IntelligentTieringAccessTier'|'BucketKeyStatus'|'ChecksumAlgorithm'|'ObjectAccessControlList'|'ObjectOwner'>|null,
     *     Schedule: InventorySchedule
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
