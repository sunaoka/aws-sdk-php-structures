<?php

namespace Sunaoka\Aws\Structures\S3\UploadPart;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'AES256'|'aws:fsx'|'aws:kms'|'aws:kms:dsse'|null $ServerSideEncryption
 * @property string|null $ETag
 * @property string|null $ChecksumCRC32
 * @property string|null $ChecksumCRC32C
 * @property string|null $ChecksumCRC64NVME
 * @property string|null $ChecksumSHA1
 * @property string|null $ChecksumSHA256
 * @property string|null $ChecksumSHA512
 * @property string|null $ChecksumMD5
 * @property string|null $ChecksumXXHASH64
 * @property string|null $ChecksumXXHASH3
 * @property string|null $ChecksumXXHASH128
 * @property string|null $SSECustomerAlgorithm
 * @property string|null $SSECustomerKeyMD5
 * @property string|null $SSEKMSKeyId
 * @property bool|null $BucketKeyEnabled
 * @property 'requester'|null $RequestCharged
 */
class UploadPartResponse extends Response
{
}
