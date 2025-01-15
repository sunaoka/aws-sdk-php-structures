<?php

namespace Sunaoka\Aws\Structures\S3\CreateMultipartUpload;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $AbortDate
 * @property string|null $AbortRuleId
 * @property string|null $Bucket
 * @property string|null $Key
 * @property string|null $UploadId
 * @property 'AES256'|'aws:kms'|'aws:kms:dsse'|null $ServerSideEncryption
 * @property string|null $SSECustomerAlgorithm
 * @property string|null $SSECustomerKeyMD5
 * @property string|null $SSEKMSKeyId
 * @property string|null $SSEKMSEncryptionContext
 * @property bool|null $BucketKeyEnabled
 * @property 'requester'|null $RequestCharged
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|null $ChecksumAlgorithm
 */
class CreateMultipartUploadResponse extends Response
{
}
