<?php

namespace Sunaoka\Aws\Structures\S3\CreateSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'AES256'|'aws:fsx'|'aws:kms'|'aws:kms:dsse'|null $ServerSideEncryption
 * @property string|null $SSEKMSKeyId
 * @property string|null $SSEKMSEncryptionContext
 * @property bool|null $BucketKeyEnabled
 * @property Shapes\SessionCredentials $Credentials
 */
class CreateSessionResponse extends Response
{
}
