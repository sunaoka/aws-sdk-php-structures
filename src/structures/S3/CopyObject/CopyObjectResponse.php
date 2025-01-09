<?php

namespace Sunaoka\Aws\Structures\S3\CopyObject;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\CopyObjectResult $CopyObjectResult
 * @property string $Expiration
 * @property string $CopySourceVersionId
 * @property string $VersionId
 * @property 'AES256'|'aws:kms'|'aws:kms:dsse' $ServerSideEncryption
 * @property string $SSECustomerAlgorithm
 * @property string $SSECustomerKeyMD5
 * @property string $SSEKMSKeyId
 * @property string $SSEKMSEncryptionContext
 * @property bool $BucketKeyEnabled
 * @property 'requester' $RequestCharged
 */
class CopyObjectResponse extends Response
{
}
