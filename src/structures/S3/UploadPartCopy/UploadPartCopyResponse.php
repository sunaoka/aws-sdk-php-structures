<?php

namespace Sunaoka\Aws\Structures\S3\UploadPartCopy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $CopySourceVersionId
 * @property Shapes\CopyPartResult $CopyPartResult
 * @property 'AES256'|'aws:kms'|'aws:kms:dsse' $ServerSideEncryption
 * @property string $SSECustomerAlgorithm
 * @property string $SSECustomerKeyMD5
 * @property string $SSEKMSKeyId
 * @property bool $BucketKeyEnabled
 * @property 'requester' $RequestCharged
 */
class UploadPartCopyResponse extends Response
{
}
