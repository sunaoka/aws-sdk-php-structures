<?php

namespace Sunaoka\Aws\Structures\S3\CreateSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'AES256'|'aws:kms'|'aws:kms:dsse' $ServerSideEncryption
 * @property string $SSEKMSKeyId
 * @property string $SSEKMSEncryptionContext
 * @property bool $BucketKeyEnabled
 * @property Shapes\SessionCredentials $Credentials
 */
class CreateSessionResponse extends Response
{
}
