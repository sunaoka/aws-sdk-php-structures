<?php

namespace Sunaoka\Aws\Structures\S3\CreateMultipartUpload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'private'|'public-read'|'public-read-write'|'authenticated-read'|'aws-exec-read'|'bucket-owner-read'|'bucket-owner-full-control' $ACL
 * @property string $Bucket
 * @property string $CacheControl
 * @property string $ContentDisposition
 * @property string $ContentEncoding
 * @property string $ContentLanguage
 * @property string $ContentType
 * @property \Aws\Api\DateTimeResult $Expires
 * @property string $GrantFullControl
 * @property string $GrantRead
 * @property string $GrantReadACP
 * @property string $GrantWriteACP
 * @property string $Key
 * @property array<string, string> $Metadata
 * @property 'AES256'|'aws:kms'|'aws:kms:dsse' $ServerSideEncryption
 * @property 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE' $StorageClass
 * @property string $WebsiteRedirectLocation
 * @property string $SSECustomerAlgorithm
 * @property string $SSECustomerKey
 * @property string $SSECustomerKeyMD5
 * @property string $SSEKMSKeyId
 * @property string $SSEKMSEncryptionContext
 * @property bool $BucketKeyEnabled
 * @property 'requester' $RequestPayer
 * @property string $Tagging
 * @property 'GOVERNANCE'|'COMPLIANCE' $ObjectLockMode
 * @property \Aws\Api\DateTimeResult $ObjectLockRetainUntilDate
 * @property 'ON'|'OFF' $ObjectLockLegalHoldStatus
 * @property string $ExpectedBucketOwner
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256' $ChecksumAlgorithm
 */
class CreateMultipartUploadRequest extends Request
{
    /**
     * @param array{
     *     ACL?: 'private'|'public-read'|'public-read-write'|'authenticated-read'|'aws-exec-read'|'bucket-owner-read'|'bucket-owner-full-control',
     *     Bucket: string,
     *     CacheControl?: string,
     *     ContentDisposition?: string,
     *     ContentEncoding?: string,
     *     ContentLanguage?: string,
     *     ContentType?: string,
     *     Expires?: \Aws\Api\DateTimeResult,
     *     GrantFullControl?: string,
     *     GrantRead?: string,
     *     GrantReadACP?: string,
     *     GrantWriteACP?: string,
     *     Key: string,
     *     Metadata?: array<string, string>,
     *     ServerSideEncryption?: 'AES256'|'aws:kms'|'aws:kms:dsse',
     *     StorageClass?: 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE',
     *     WebsiteRedirectLocation?: string,
     *     SSECustomerAlgorithm?: string,
     *     SSECustomerKey?: string,
     *     SSECustomerKeyMD5?: string,
     *     SSEKMSKeyId?: string,
     *     SSEKMSEncryptionContext?: string,
     *     BucketKeyEnabled?: bool,
     *     RequestPayer?: 'requester',
     *     Tagging?: string,
     *     ObjectLockMode?: 'GOVERNANCE'|'COMPLIANCE',
     *     ObjectLockRetainUntilDate?: \Aws\Api\DateTimeResult,
     *     ObjectLockLegalHoldStatus?: 'ON'|'OFF',
     *     ExpectedBucketOwner?: string,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
