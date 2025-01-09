<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketEncryption\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AES256'|'aws:kms'|'aws:kms:dsse' $SSEAlgorithm
 * @property string $KMSMasterKeyID
 */
class ServerSideEncryptionByDefault extends Shape
{
    /**
     * @param array{
     *     SSEAlgorithm: 'AES256'|'aws:kms'|'aws:kms:dsse',
     *     KMSMasterKeyID?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
