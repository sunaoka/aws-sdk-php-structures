<?php

namespace Sunaoka\Aws\Structures\S3\CompleteMultipartUpload;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Location
 * @property string $Bucket
 * @property string $Key
 * @property string $Expiration
 * @property string $ETag
 * @property string $ChecksumCRC32
 * @property string $ChecksumCRC32C
 * @property string $ChecksumSHA1
 * @property string $ChecksumSHA256
 * @property 'AES256'|'aws:kms'|'aws:kms:dsse' $ServerSideEncryption
 * @property string $VersionId
 * @property string $SSEKMSKeyId
 * @property bool $BucketKeyEnabled
 * @property 'requester' $RequestCharged
 */
class CompleteMultipartUploadResponse extends Response
{
}
