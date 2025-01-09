<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TargetResource
 * @property 'private'|'public-read'|'public-read-write'|'aws-exec-read'|'authenticated-read'|'bucket-owner-read'|'bucket-owner-full-control' $CannedAccessControlList
 * @property list<S3Grant> $AccessControlGrants
 * @property 'COPY'|'REPLACE' $MetadataDirective
 * @property \Aws\Api\DateTimeResult $ModifiedSinceConstraint
 * @property S3ObjectMetadata $NewObjectMetadata
 * @property list<S3Tag> $NewObjectTagging
 * @property string $RedirectLocation
 * @property bool $RequesterPays
 * @property 'STANDARD'|'STANDARD_IA'|'ONEZONE_IA'|'GLACIER'|'INTELLIGENT_TIERING'|'DEEP_ARCHIVE'|'GLACIER_IR' $StorageClass
 * @property \Aws\Api\DateTimeResult $UnModifiedSinceConstraint
 * @property string $SSEAwsKmsKeyId
 * @property string $TargetKeyPrefix
 * @property 'OFF'|'ON' $ObjectLockLegalHoldStatus
 * @property 'COMPLIANCE'|'GOVERNANCE' $ObjectLockMode
 * @property \Aws\Api\DateTimeResult $ObjectLockRetainUntilDate
 * @property bool $BucketKeyEnabled
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME' $ChecksumAlgorithm
 */
class S3CopyObjectOperation extends Shape
{
    /**
     * @param array{
     *     TargetResource?: string,
     *     CannedAccessControlList?: 'private'|'public-read'|'public-read-write'|'aws-exec-read'|'authenticated-read'|'bucket-owner-read'|'bucket-owner-full-control',
     *     AccessControlGrants?: list<S3Grant>,
     *     MetadataDirective?: 'COPY'|'REPLACE',
     *     ModifiedSinceConstraint?: \Aws\Api\DateTimeResult,
     *     NewObjectMetadata?: S3ObjectMetadata,
     *     NewObjectTagging?: list<S3Tag>,
     *     RedirectLocation?: string,
     *     RequesterPays?: bool,
     *     StorageClass?: 'STANDARD'|'STANDARD_IA'|'ONEZONE_IA'|'GLACIER'|'INTELLIGENT_TIERING'|'DEEP_ARCHIVE'|'GLACIER_IR',
     *     UnModifiedSinceConstraint?: \Aws\Api\DateTimeResult,
     *     SSEAwsKmsKeyId?: string,
     *     TargetKeyPrefix?: string,
     *     ObjectLockLegalHoldStatus?: 'OFF'|'ON',
     *     ObjectLockMode?: 'COMPLIANCE'|'GOVERNANCE',
     *     ObjectLockRetainUntilDate?: \Aws\Api\DateTimeResult,
     *     BucketKeyEnabled?: bool,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
