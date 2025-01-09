<?php

namespace Sunaoka\Aws\Structures\S3\PutObject;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Expiration
 * @property string $ETag
 * @property string $ChecksumCRC32
 * @property string $ChecksumCRC32C
 * @property string $ChecksumSHA1
 * @property string $ChecksumSHA256
 * @property 'AES256'|'aws:kms'|'aws:kms:dsse' $ServerSideEncryption
 * @property string $VersionId
 * @property string $SSECustomerAlgorithm
 * @property string $SSECustomerKeyMD5
 * @property string $SSEKMSKeyId
 * @property string $SSEKMSEncryptionContext
 * @property bool $BucketKeyEnabled
 * @property int $Size
 * @property 'requester' $RequestCharged
 */
class PutObjectResponse extends Response
{
}
