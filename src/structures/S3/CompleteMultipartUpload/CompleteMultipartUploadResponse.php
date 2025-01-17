<?php

namespace Sunaoka\Aws\Structures\S3\CompleteMultipartUpload;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Location
 * @property string|null $Bucket
 * @property string|null $Key
 * @property string|null $Expiration
 * @property string|null $ETag
 * @property string|null $ChecksumCRC32
 * @property string|null $ChecksumCRC32C
 * @property string|null $ChecksumCRC64NVME
 * @property string|null $ChecksumSHA1
 * @property string|null $ChecksumSHA256
 * @property 'COMPOSITE'|'FULL_OBJECT'|null $ChecksumType
 * @property 'AES256'|'aws:kms'|'aws:kms:dsse'|null $ServerSideEncryption
 * @property string|null $VersionId
 * @property string|null $SSEKMSKeyId
 * @property bool|null $BucketKeyEnabled
 * @property 'requester'|null $RequestCharged
 */
class CompleteMultipartUploadResponse extends Response
{
}
