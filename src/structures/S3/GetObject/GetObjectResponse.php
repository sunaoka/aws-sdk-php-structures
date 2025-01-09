<?php

namespace Sunaoka\Aws\Structures\S3\GetObject;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Body
 * @property bool $DeleteMarker
 * @property string $AcceptRanges
 * @property string $Expiration
 * @property string $Restore
 * @property \Aws\Api\DateTimeResult $LastModified
 * @property int $ContentLength
 * @property string $ETag
 * @property string $ChecksumCRC32
 * @property string $ChecksumCRC32C
 * @property string $ChecksumSHA1
 * @property string $ChecksumSHA256
 * @property int $MissingMeta
 * @property string $VersionId
 * @property string $CacheControl
 * @property string $ContentDisposition
 * @property string $ContentEncoding
 * @property string $ContentLanguage
 * @property string $ContentRange
 * @property string $ContentType
 * @property \Aws\Api\DateTimeResult $Expires
 * @property string $WebsiteRedirectLocation
 * @property 'AES256'|'aws:kms'|'aws:kms:dsse' $ServerSideEncryption
 * @property array<string, string> $Metadata
 * @property string $SSECustomerAlgorithm
 * @property string $SSECustomerKeyMD5
 * @property string $SSEKMSKeyId
 * @property bool $BucketKeyEnabled
 * @property 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE' $StorageClass
 * @property 'requester' $RequestCharged
 * @property 'COMPLETE'|'PENDING'|'FAILED'|'REPLICA'|'COMPLETED' $ReplicationStatus
 * @property int $PartsCount
 * @property int $TagCount
 * @property 'GOVERNANCE'|'COMPLIANCE' $ObjectLockMode
 * @property \Aws\Api\DateTimeResult $ObjectLockRetainUntilDate
 * @property 'ON'|'OFF' $ObjectLockLegalHoldStatus
 */
class GetObjectResponse extends Response
{
}
