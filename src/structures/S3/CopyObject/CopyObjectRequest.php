<?php

namespace Sunaoka\Aws\Structures\S3\CopyObject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'private'|'public-read'|'public-read-write'|'authenticated-read'|'aws-exec-read'|'bucket-owner-read'|'bucket-owner-full-control'|null $ACL
 * @property string $Bucket
 * @property string|null $CacheControl
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|null $ChecksumAlgorithm
 * @property string|null $ContentDisposition
 * @property string|null $ContentEncoding
 * @property string|null $ContentLanguage
 * @property string|null $ContentType
 * @property string $CopySource
 * @property string|null $CopySourceIfMatch
 * @property \Aws\Api\DateTimeResult|null $CopySourceIfModifiedSince
 * @property string|null $CopySourceIfNoneMatch
 * @property \Aws\Api\DateTimeResult|null $CopySourceIfUnmodifiedSince
 * @property string|null $Expires
 * @property string|null $GrantFullControl
 * @property string|null $GrantRead
 * @property string|null $GrantReadACP
 * @property string|null $GrantWriteACP
 * @property string|null $IfMatch
 * @property string|null $IfNoneMatch
 * @property string $Key
 * @property array<string, string>|null $Metadata
 * @property 'COPY'|'REPLACE'|null $MetadataDirective
 * @property 'COPY'|'REPLACE'|null $TaggingDirective
 * @property 'AES256'|'aws:fsx'|'aws:kms'|'aws:kms:dsse'|null $ServerSideEncryption
 * @property 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE'|'FSX_OPENZFS'|null $StorageClass
 * @property string|null $WebsiteRedirectLocation
 * @property string|null $SSECustomerAlgorithm
 * @property string|null $SSECustomerKey
 * @property string|null $SSECustomerKeyMD5
 * @property string|null $SSEKMSKeyId
 * @property string|null $SSEKMSEncryptionContext
 * @property bool|null $BucketKeyEnabled
 * @property string|null $CopySourceSSECustomerAlgorithm
 * @property string|null $CopySourceSSECustomerKey
 * @property string|null $CopySourceSSECustomerKeyMD5
 * @property 'requester'|null $RequestPayer
 * @property string|null $Tagging
 * @property 'GOVERNANCE'|'COMPLIANCE'|null $ObjectLockMode
 * @property \Aws\Api\DateTimeResult|null $ObjectLockRetainUntilDate
 * @property 'ON'|'OFF'|null $ObjectLockLegalHoldStatus
 * @property string|null $ExpectedBucketOwner
 * @property string|null $ExpectedSourceBucketOwner
 */
class CopyObjectRequest extends Request
{
    /**
     * @param array{
     *     ACL?: 'private'|'public-read'|'public-read-write'|'authenticated-read'|'aws-exec-read'|'bucket-owner-read'|'bucket-owner-full-control'|null,
     *     Bucket: string,
     *     CacheControl?: string|null,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|null,
     *     ContentDisposition?: string|null,
     *     ContentEncoding?: string|null,
     *     ContentLanguage?: string|null,
     *     ContentType?: string|null,
     *     CopySource: string,
     *     CopySourceIfMatch?: string|null,
     *     CopySourceIfModifiedSince?: \Aws\Api\DateTimeResult|null,
     *     CopySourceIfNoneMatch?: string|null,
     *     CopySourceIfUnmodifiedSince?: \Aws\Api\DateTimeResult|null,
     *     Expires?: string|null,
     *     GrantFullControl?: string|null,
     *     GrantRead?: string|null,
     *     GrantReadACP?: string|null,
     *     GrantWriteACP?: string|null,
     *     IfMatch?: string|null,
     *     IfNoneMatch?: string|null,
     *     Key: string,
     *     Metadata?: array<string, string>|null,
     *     MetadataDirective?: 'COPY'|'REPLACE'|null,
     *     TaggingDirective?: 'COPY'|'REPLACE'|null,
     *     ServerSideEncryption?: 'AES256'|'aws:fsx'|'aws:kms'|'aws:kms:dsse'|null,
     *     StorageClass?: 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE'|'FSX_OPENZFS'|null,
     *     WebsiteRedirectLocation?: string|null,
     *     SSECustomerAlgorithm?: string|null,
     *     SSECustomerKey?: string|null,
     *     SSECustomerKeyMD5?: string|null,
     *     SSEKMSKeyId?: string|null,
     *     SSEKMSEncryptionContext?: string|null,
     *     BucketKeyEnabled?: bool|null,
     *     CopySourceSSECustomerAlgorithm?: string|null,
     *     CopySourceSSECustomerKey?: string|null,
     *     CopySourceSSECustomerKeyMD5?: string|null,
     *     RequestPayer?: 'requester'|null,
     *     Tagging?: string|null,
     *     ObjectLockMode?: 'GOVERNANCE'|'COMPLIANCE'|null,
     *     ObjectLockRetainUntilDate?: \Aws\Api\DateTimeResult|null,
     *     ObjectLockLegalHoldStatus?: 'ON'|'OFF'|null,
     *     ExpectedBucketOwner?: string|null,
     *     ExpectedSourceBucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
