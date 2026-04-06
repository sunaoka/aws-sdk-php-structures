<?php

namespace Sunaoka\Aws\Structures\S3\CopyObject;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\CopyObjectResult|null $CopyObjectResult
 * @property string|null $Expiration
 * @property string|null $CopySourceVersionId
 * @property string|null $VersionId
 * @property 'AES256'|'aws:kms'|'aws:kms:dsse'|null $ServerSideEncryption
 * @property string|null $SSECustomerAlgorithm
 * @property string|null $SSECustomerKeyMD5
 * @property string|null $SSEKMSKeyId
 * @property string|null $SSEKMSEncryptionContext
 * @property bool|null $BucketKeyEnabled
 * @property 'requester'|null $RequestCharged
 */
class CopyObjectResponse extends Response
{
}
