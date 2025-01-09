<?php

namespace Sunaoka\Aws\Structures\S3\PutObject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'private'|'public-read'|'public-read-write'|'authenticated-read'|'aws-exec-read'|'bucket-owner-read'|'bucket-owner-full-control' $ACL
 * @property string $Body
 * @property string $Bucket
 * @property string $CacheControl
 * @property string $ContentDisposition
 * @property string $ContentEncoding
 * @property string $ContentLanguage
 * @property int $ContentLength
 * @property string $ContentMD5
 * @property string $ContentType
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256' $ChecksumAlgorithm
 * @property string $ChecksumCRC32
 * @property string $ChecksumCRC32C
 * @property string $ChecksumSHA1
 * @property string $ChecksumSHA256
 * @property \Aws\Api\DateTimeResult $Expires
 * @property string $IfMatch
 * @property string $IfNoneMatch
 * @property string $GrantFullControl
 * @property string $GrantRead
 * @property string $GrantReadACP
 * @property string $GrantWriteACP
 * @property string $Key
 * @property int $WriteOffsetBytes
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
 */
class PutObjectRequest extends Request
{
    /**
     * @param array{
     *     ACL?: 'private'|'public-read'|'public-read-write'|'authenticated-read'|'aws-exec-read'|'bucket-owner-read'|'bucket-owner-full-control',
     *     Body?: string,
     *     Bucket: string,
     *     CacheControl?: string,
     *     ContentDisposition?: string,
     *     ContentEncoding?: string,
     *     ContentLanguage?: string,
     *     ContentLength?: int,
     *     ContentMD5?: string,
     *     ContentType?: string,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256',
     *     ChecksumCRC32?: string,
     *     ChecksumCRC32C?: string,
     *     ChecksumSHA1?: string,
     *     ChecksumSHA256?: string,
     *     Expires?: \Aws\Api\DateTimeResult,
     *     IfMatch?: string,
     *     IfNoneMatch?: string,
     *     GrantFullControl?: string,
     *     GrantRead?: string,
     *     GrantReadACP?: string,
     *     GrantWriteACP?: string,
     *     Key: string,
     *     WriteOffsetBytes?: int,
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
     *     ExpectedBucketOwner?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
