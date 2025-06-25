<?php

namespace Sunaoka\Aws\Structures\S3\CreateMultipartUpload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'private'|'public-read'|'public-read-write'|'authenticated-read'|'aws-exec-read'|'bucket-owner-read'|'bucket-owner-full-control'|null $ACL
 * @property string $Bucket
 * @property string|null $CacheControl
 * @property string|null $ContentDisposition
 * @property string|null $ContentEncoding
 * @property string|null $ContentLanguage
 * @property string|null $ContentType
 * @property \Aws\Api\DateTimeResult|null $Expires
 * @property string|null $GrantFullControl
 * @property string|null $GrantRead
 * @property string|null $GrantReadACP
 * @property string|null $GrantWriteACP
 * @property string $Key
 * @property array<string, string>|null $Metadata
 * @property 'AES256'|'aws:fsx'|'aws:kms'|'aws:kms:dsse'|null $ServerSideEncryption
 * @property 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE'|'FSX_OPENZFS'|null $StorageClass
 * @property string|null $WebsiteRedirectLocation
 * @property string|null $SSECustomerAlgorithm
 * @property string|null $SSECustomerKey
 * @property string|null $SSECustomerKeyMD5
 * @property string|null $SSEKMSKeyId
 * @property string|null $SSEKMSEncryptionContext
 * @property bool|null $BucketKeyEnabled
 * @property 'requester'|null $RequestPayer
 * @property string|null $Tagging
 * @property 'GOVERNANCE'|'COMPLIANCE'|null $ObjectLockMode
 * @property \Aws\Api\DateTimeResult|null $ObjectLockRetainUntilDate
 * @property 'ON'|'OFF'|null $ObjectLockLegalHoldStatus
 * @property string|null $ExpectedBucketOwner
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|null $ChecksumAlgorithm
 * @property 'COMPOSITE'|'FULL_OBJECT'|null $ChecksumType
 */
class CreateMultipartUploadRequest extends Request
{
    /**
     * @param array{
     *     ACL?: 'private'|'public-read'|'public-read-write'|'authenticated-read'|'aws-exec-read'|'bucket-owner-read'|'bucket-owner-full-control'|null,
     *     Bucket: string,
     *     CacheControl?: string|null,
     *     ContentDisposition?: string|null,
     *     ContentEncoding?: string|null,
     *     ContentLanguage?: string|null,
     *     ContentType?: string|null,
     *     Expires?: \Aws\Api\DateTimeResult|null,
     *     GrantFullControl?: string|null,
     *     GrantRead?: string|null,
     *     GrantReadACP?: string|null,
     *     GrantWriteACP?: string|null,
     *     Key: string,
     *     Metadata?: array<string, string>|null,
     *     ServerSideEncryption?: 'AES256'|'aws:fsx'|'aws:kms'|'aws:kms:dsse'|null,
     *     StorageClass?: 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE'|'FSX_OPENZFS'|null,
     *     WebsiteRedirectLocation?: string|null,
     *     SSECustomerAlgorithm?: string|null,
     *     SSECustomerKey?: string|null,
     *     SSECustomerKeyMD5?: string|null,
     *     SSEKMSKeyId?: string|null,
     *     SSEKMSEncryptionContext?: string|null,
     *     BucketKeyEnabled?: bool|null,
     *     RequestPayer?: 'requester'|null,
     *     Tagging?: string|null,
     *     ObjectLockMode?: 'GOVERNANCE'|'COMPLIANCE'|null,
     *     ObjectLockRetainUntilDate?: \Aws\Api\DateTimeResult|null,
     *     ObjectLockLegalHoldStatus?: 'ON'|'OFF'|null,
     *     ExpectedBucketOwner?: string|null,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|null,
     *     ChecksumType?: 'COMPOSITE'|'FULL_OBJECT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
