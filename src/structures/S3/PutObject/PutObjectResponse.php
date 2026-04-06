<?php

namespace Sunaoka\Aws\Structures\S3\PutObject;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Expiration
 * @property string|null $ETag
 * @property string|null $ChecksumCRC32
 * @property string|null $ChecksumCRC32C
 * @property string|null $ChecksumCRC64NVME
 * @property string|null $ChecksumSHA1
 * @property string|null $ChecksumSHA256
 * @property 'COMPOSITE'|'FULL_OBJECT'|null $ChecksumType
 * @property 'AES256'|'aws:fsx'|'aws:kms'|'aws:kms:dsse'|null $ServerSideEncryption
 * @property string|null $VersionId
 * @property string|null $SSECustomerAlgorithm
 * @property string|null $SSECustomerKeyMD5
 * @property string|null $SSEKMSKeyId
 * @property string|null $SSEKMSEncryptionContext
 * @property bool|null $BucketKeyEnabled
 * @property int|null $Size
 * @property 'requester'|null $RequestCharged
 */
class PutObjectResponse extends Response
{
}
