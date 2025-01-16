<?php

namespace Sunaoka\Aws\Structures\S3\PutObject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'private'|'public-read'|'public-read-write'|'authenticated-read'|'aws-exec-read'|'bucket-owner-read'|'bucket-owner-full-control'|null $ACL
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $Body
 * @property string $Bucket
 * @property string|null $CacheControl
 * @property string|null $ContentDisposition
 * @property string|null $ContentEncoding
 * @property string|null $ContentLanguage
 * @property int|null $ContentLength
 * @property string|null $ContentMD5
 * @property string|null $ContentType
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|null $ChecksumAlgorithm
 * @property string|null $ChecksumCRC32
 * @property string|null $ChecksumCRC32C
 * @property string|null $ChecksumCRC64NVME
 * @property string|null $ChecksumSHA1
 * @property string|null $ChecksumSHA256
 * @property \Aws\Api\DateTimeResult|null $Expires
 * @property string|null $IfMatch
 * @property string|null $IfNoneMatch
 * @property string|null $GrantFullControl
 * @property string|null $GrantRead
 * @property string|null $GrantReadACP
 * @property string|null $GrantWriteACP
 * @property string $Key
 * @property int|null $WriteOffsetBytes
 * @property array<string, string>|null $Metadata
 * @property 'AES256'|'aws:kms'|'aws:kms:dsse'|null $ServerSideEncryption
 * @property 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE'|null $StorageClass
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
 */
class PutObjectRequest extends Request
{
    /**
     * @param array{
     *     ACL?: 'private'|'public-read'|'public-read-write'|'authenticated-read'|'aws-exec-read'|'bucket-owner-read'|'bucket-owner-full-control'|null,
     *     Body?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     Bucket: string,
     *     CacheControl?: string|null,
     *     ContentDisposition?: string|null,
     *     ContentEncoding?: string|null,
     *     ContentLanguage?: string|null,
     *     ContentLength?: int|null,
     *     ContentMD5?: string|null,
     *     ContentType?: string|null,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|null,
     *     ChecksumCRC32?: string|null,
     *     ChecksumCRC32C?: string|null,
     *     ChecksumCRC64NVME?: string|null,
     *     ChecksumSHA1?: string|null,
     *     ChecksumSHA256?: string|null,
     *     Expires?: \Aws\Api\DateTimeResult|null,
     *     IfMatch?: string|null,
     *     IfNoneMatch?: string|null,
     *     GrantFullControl?: string|null,
     *     GrantRead?: string|null,
     *     GrantReadACP?: string|null,
     *     GrantWriteACP?: string|null,
     *     Key: string,
     *     WriteOffsetBytes?: int|null,
     *     Metadata?: array<string, string>|null,
     *     ServerSideEncryption?: 'AES256'|'aws:kms'|'aws:kms:dsse'|null,
     *     StorageClass?: 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE'|null,
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
     *     ExpectedBucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
