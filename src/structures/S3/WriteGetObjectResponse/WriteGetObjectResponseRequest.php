<?php

namespace Sunaoka\Aws\Structures\S3\WriteGetObjectResponse;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RequestRoute
 * @property string $RequestToken
 * @property string|resource|\Psr\Http\Message\StreamInterface $Body
 * @property int $StatusCode
 * @property string $ErrorCode
 * @property string $ErrorMessage
 * @property string $AcceptRanges
 * @property string $CacheControl
 * @property string $ContentDisposition
 * @property string $ContentEncoding
 * @property string $ContentLanguage
 * @property int $ContentLength
 * @property string $ContentRange
 * @property string $ContentType
 * @property string $ChecksumCRC32
 * @property string $ChecksumCRC32C
 * @property string $ChecksumSHA1
 * @property string $ChecksumSHA256
 * @property bool $DeleteMarker
 * @property string $ETag
 * @property \Aws\Api\DateTimeResult $Expires
 * @property string $Expiration
 * @property \Aws\Api\DateTimeResult $LastModified
 * @property int $MissingMeta
 * @property array<string, string> $Metadata
 * @property 'GOVERNANCE'|'COMPLIANCE' $ObjectLockMode
 * @property 'ON'|'OFF' $ObjectLockLegalHoldStatus
 * @property \Aws\Api\DateTimeResult $ObjectLockRetainUntilDate
 * @property int $PartsCount
 * @property 'COMPLETE'|'PENDING'|'FAILED'|'REPLICA'|'COMPLETED' $ReplicationStatus
 * @property 'requester' $RequestCharged
 * @property string $Restore
 * @property 'AES256'|'aws:kms'|'aws:kms:dsse' $ServerSideEncryption
 * @property string $SSECustomerAlgorithm
 * @property string $SSEKMSKeyId
 * @property string $SSECustomerKeyMD5
 * @property 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE' $StorageClass
 * @property int $TagCount
 * @property string $VersionId
 * @property bool $BucketKeyEnabled
 */
class WriteGetObjectResponseRequest extends Request
{
    /**
     * @param array{
     *     RequestRoute: string,
     *     RequestToken: string,
     *     Body?: string|resource|\Psr\Http\Message\StreamInterface,
     *     StatusCode?: int,
     *     ErrorCode?: string,
     *     ErrorMessage?: string,
     *     AcceptRanges?: string,
     *     CacheControl?: string,
     *     ContentDisposition?: string,
     *     ContentEncoding?: string,
     *     ContentLanguage?: string,
     *     ContentLength?: int,
     *     ContentRange?: string,
     *     ContentType?: string,
     *     ChecksumCRC32?: string,
     *     ChecksumCRC32C?: string,
     *     ChecksumSHA1?: string,
     *     ChecksumSHA256?: string,
     *     DeleteMarker?: bool,
     *     ETag?: string,
     *     Expires?: \Aws\Api\DateTimeResult,
     *     Expiration?: string,
     *     LastModified?: \Aws\Api\DateTimeResult,
     *     MissingMeta?: int,
     *     Metadata?: array<string, string>,
     *     ObjectLockMode?: 'GOVERNANCE'|'COMPLIANCE',
     *     ObjectLockLegalHoldStatus?: 'ON'|'OFF',
     *     ObjectLockRetainUntilDate?: \Aws\Api\DateTimeResult,
     *     PartsCount?: int,
     *     ReplicationStatus?: 'COMPLETE'|'PENDING'|'FAILED'|'REPLICA'|'COMPLETED',
     *     RequestCharged?: 'requester',
     *     Restore?: string,
     *     ServerSideEncryption?: 'AES256'|'aws:kms'|'aws:kms:dsse',
     *     SSECustomerAlgorithm?: string,
     *     SSEKMSKeyId?: string,
     *     SSECustomerKeyMD5?: string,
     *     StorageClass?: 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE',
     *     TagCount?: int,
     *     VersionId?: string,
     *     BucketKeyEnabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
