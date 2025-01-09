<?php

namespace Sunaoka\Aws\Structures\S3\CreateMultipartUpload;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $AbortDate
 * @property string $AbortRuleId
 * @property string $Bucket
 * @property string $Key
 * @property string $UploadId
 * @property 'AES256'|'aws:kms'|'aws:kms:dsse' $ServerSideEncryption
 * @property string $SSECustomerAlgorithm
 * @property string $SSECustomerKeyMD5
 * @property string $SSEKMSKeyId
 * @property string $SSEKMSEncryptionContext
 * @property bool $BucketKeyEnabled
 * @property 'requester' $RequestCharged
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256' $ChecksumAlgorithm
 */
class CreateMultipartUploadResponse extends Response
{
}
