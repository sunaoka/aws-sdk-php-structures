<?php

namespace Sunaoka\Aws\Structures\S3\CreateSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ReadOnly'|'ReadWrite'|null $SessionMode
 * @property string $Bucket
 * @property 'AES256'|'aws:fsx'|'aws:kms'|'aws:kms:dsse'|null $ServerSideEncryption
 * @property string|null $SSEKMSKeyId
 * @property string|null $SSEKMSEncryptionContext
 * @property bool|null $BucketKeyEnabled
 */
class CreateSessionRequest extends Request
{
    /**
     * @param array{
     *     SessionMode?: 'ReadOnly'|'ReadWrite'|null,
     *     Bucket: string,
     *     ServerSideEncryption?: 'AES256'|'aws:fsx'|'aws:kms'|'aws:kms:dsse'|null,
     *     SSEKMSKeyId?: string|null,
     *     SSEKMSEncryptionContext?: string|null,
     *     BucketKeyEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
