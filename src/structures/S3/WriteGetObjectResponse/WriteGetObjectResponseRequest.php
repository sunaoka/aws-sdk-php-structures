<?php

namespace Sunaoka\Aws\Structures\S3\WriteGetObjectResponse;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RequestRoute
 * @property string $RequestToken
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $Body
 * @property int|null $StatusCode
 * @property string|null $ErrorCode
 * @property string|null $ErrorMessage
 * @property string|null $AcceptRanges
 * @property string|null $CacheControl
 * @property string|null $ContentDisposition
 * @property string|null $ContentEncoding
 * @property string|null $ContentLanguage
 * @property int|null $ContentLength
 * @property string|null $ContentRange
 * @property string|null $ContentType
 * @property string|null $ChecksumCRC32
 * @property string|null $ChecksumCRC32C
 * @property string|null $ChecksumCRC64NVME
 * @property string|null $ChecksumSHA1
 * @property string|null $ChecksumSHA256
 * @property bool|null $DeleteMarker
 * @property string|null $ETag
 * @property \Aws\Api\DateTimeResult|null $Expires
 * @property string|null $Expiration
 * @property \Aws\Api\DateTimeResult|null $LastModified
 * @property int|null $MissingMeta
 * @property array<string, string>|null $Metadata
 * @property 'GOVERNANCE'|'COMPLIANCE'|null $ObjectLockMode
 * @property 'ON'|'OFF'|null $ObjectLockLegalHoldStatus
 * @property \Aws\Api\DateTimeResult|null $ObjectLockRetainUntilDate
 * @property int|null $PartsCount
 * @property 'COMPLETE'|'PENDING'|'FAILED'|'REPLICA'|'COMPLETED'|null $ReplicationStatus
 * @property 'requester'|null $RequestCharged
 * @property string|null $Restore
 * @property 'AES256'|'aws:fsx'|'aws:kms'|'aws:kms:dsse'|null $ServerSideEncryption
 * @property string|null $SSECustomerAlgorithm
 * @property string|null $SSEKMSKeyId
 * @property string|null $SSECustomerKeyMD5
 * @property 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE'|'FSX_OPENZFS'|null $StorageClass
 * @property int|null $TagCount
 * @property string|null $VersionId
 * @property bool|null $BucketKeyEnabled
 */
class WriteGetObjectResponseRequest extends Request
{
    /**
     * @param array{
     *     RequestRoute: string,
     *     RequestToken: string,
     *     Body?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     StatusCode?: int|null,
     *     ErrorCode?: string|null,
     *     ErrorMessage?: string|null,
     *     AcceptRanges?: string|null,
     *     CacheControl?: string|null,
     *     ContentDisposition?: string|null,
     *     ContentEncoding?: string|null,
     *     ContentLanguage?: string|null,
     *     ContentLength?: int|null,
     *     ContentRange?: string|null,
     *     ContentType?: string|null,
     *     ChecksumCRC32?: string|null,
     *     ChecksumCRC32C?: string|null,
     *     ChecksumCRC64NVME?: string|null,
     *     ChecksumSHA1?: string|null,
     *     ChecksumSHA256?: string|null,
     *     DeleteMarker?: bool|null,
     *     ETag?: string|null,
     *     Expires?: \Aws\Api\DateTimeResult|null,
     *     Expiration?: string|null,
     *     LastModified?: \Aws\Api\DateTimeResult|null,
     *     MissingMeta?: int|null,
     *     Metadata?: array<string, string>|null,
     *     ObjectLockMode?: 'GOVERNANCE'|'COMPLIANCE'|null,
     *     ObjectLockLegalHoldStatus?: 'ON'|'OFF'|null,
     *     ObjectLockRetainUntilDate?: \Aws\Api\DateTimeResult|null,
     *     PartsCount?: int|null,
     *     ReplicationStatus?: 'COMPLETE'|'PENDING'|'FAILED'|'REPLICA'|'COMPLETED'|null,
     *     RequestCharged?: 'requester'|null,
     *     Restore?: string|null,
     *     ServerSideEncryption?: 'AES256'|'aws:fsx'|'aws:kms'|'aws:kms:dsse'|null,
     *     SSECustomerAlgorithm?: string|null,
     *     SSEKMSKeyId?: string|null,
     *     SSECustomerKeyMD5?: string|null,
     *     StorageClass?: 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE'|'FSX_OPENZFS'|null,
     *     TagCount?: int|null,
     *     VersionId?: string|null,
     *     BucketKeyEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
