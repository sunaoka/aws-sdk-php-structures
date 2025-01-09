<?php

namespace Sunaoka\Aws\Structures\S3\UploadPart;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'AES256'|'aws:kms'|'aws:kms:dsse' $ServerSideEncryption
 * @property string $ETag
 * @property string $ChecksumCRC32
 * @property string $ChecksumCRC32C
 * @property string $ChecksumSHA1
 * @property string $ChecksumSHA256
 * @property string $SSECustomerAlgorithm
 * @property string $SSECustomerKeyMD5
 * @property string $SSEKMSKeyId
 * @property bool $BucketKeyEnabled
 * @property 'requester' $RequestCharged
 */
class UploadPartResponse extends Response
{
}
