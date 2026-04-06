<?php

namespace Sunaoka\Aws\Structures\S3\UploadPartCopy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $CopySourceVersionId
 * @property Shapes\CopyPartResult|null $CopyPartResult
 * @property 'AES256'|'aws:kms'|'aws:kms:dsse'|null $ServerSideEncryption
 * @property string|null $SSECustomerAlgorithm
 * @property string|null $SSECustomerKeyMD5
 * @property string|null $SSEKMSKeyId
 * @property bool|null $BucketKeyEnabled
 * @property 'requester'|null $RequestCharged
 */
class UploadPartCopyResponse extends Response
{
}
