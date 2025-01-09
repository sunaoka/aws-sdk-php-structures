<?php

namespace Sunaoka\Aws\Structures\S3\CreateSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ReadOnly'|'ReadWrite' $SessionMode
 * @property string $Bucket
 * @property 'AES256'|'aws:kms'|'aws:kms:dsse' $ServerSideEncryption
 * @property string $SSEKMSKeyId
 * @property string $SSEKMSEncryptionContext
 * @property bool $BucketKeyEnabled
 */
class CreateSessionRequest extends Request
{
    /**
     * @param array{
     *     SessionMode?: 'ReadOnly'|'ReadWrite',
     *     Bucket: string,
     *     ServerSideEncryption?: 'AES256'|'aws:kms'|'aws:kms:dsse',
     *     SSEKMSKeyId?: string,
     *     SSEKMSEncryptionContext?: string,
     *     BucketKeyEnabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
