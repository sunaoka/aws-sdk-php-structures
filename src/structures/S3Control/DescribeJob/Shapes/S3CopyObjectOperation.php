<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TargetResource
 * @property 'private'|'public-read'|'public-read-write'|'aws-exec-read'|'authenticated-read'|'bucket-owner-read'|'bucket-owner-full-control'|null $CannedAccessControlList
 * @property list<S3Grant>|null $AccessControlGrants
 * @property 'COPY'|'REPLACE'|null $MetadataDirective
 * @property \Aws\Api\DateTimeResult|null $ModifiedSinceConstraint
 * @property S3ObjectMetadata|null $NewObjectMetadata
 * @property list<S3Tag>|null $NewObjectTagging
 * @property string|null $RedirectLocation
 * @property bool|null $RequesterPays
 * @property 'STANDARD'|'STANDARD_IA'|'ONEZONE_IA'|'GLACIER'|'INTELLIGENT_TIERING'|'DEEP_ARCHIVE'|'GLACIER_IR'|null $StorageClass
 * @property \Aws\Api\DateTimeResult|null $UnModifiedSinceConstraint
 * @property string|null $SSEAwsKmsKeyId
 * @property string|null $TargetKeyPrefix
 * @property 'OFF'|'ON'|null $ObjectLockLegalHoldStatus
 * @property 'COMPLIANCE'|'GOVERNANCE'|null $ObjectLockMode
 * @property \Aws\Api\DateTimeResult|null $ObjectLockRetainUntilDate
 * @property bool|null $BucketKeyEnabled
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|null $ChecksumAlgorithm
 */
class S3CopyObjectOperation extends Shape
{
    /**
     * @param array{
     *     TargetResource?: string|null,
     *     CannedAccessControlList?: 'private'|'public-read'|'public-read-write'|'aws-exec-read'|'authenticated-read'|'bucket-owner-read'|'bucket-owner-full-control'|null,
     *     AccessControlGrants?: list<S3Grant>|null,
     *     MetadataDirective?: 'COPY'|'REPLACE'|null,
     *     ModifiedSinceConstraint?: \Aws\Api\DateTimeResult|null,
     *     NewObjectMetadata?: S3ObjectMetadata|null,
     *     NewObjectTagging?: list<S3Tag>|null,
     *     RedirectLocation?: string|null,
     *     RequesterPays?: bool|null,
     *     StorageClass?: 'STANDARD'|'STANDARD_IA'|'ONEZONE_IA'|'GLACIER'|'INTELLIGENT_TIERING'|'DEEP_ARCHIVE'|'GLACIER_IR'|null,
     *     UnModifiedSinceConstraint?: \Aws\Api\DateTimeResult|null,
     *     SSEAwsKmsKeyId?: string|null,
     *     TargetKeyPrefix?: string|null,
     *     ObjectLockLegalHoldStatus?: 'OFF'|'ON'|null,
     *     ObjectLockMode?: 'COMPLIANCE'|'GOVERNANCE'|null,
     *     ObjectLockRetainUntilDate?: \Aws\Api\DateTimeResult|null,
     *     BucketKeyEnabled?: bool|null,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
