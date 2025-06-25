<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketEncryption\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AES256'|'aws:fsx'|'aws:kms'|'aws:kms:dsse' $SSEAlgorithm
 * @property string|null $KMSMasterKeyID
 */
class ServerSideEncryptionByDefault extends Shape
{
    /**
     * @param array{
     *     SSEAlgorithm: 'AES256'|'aws:fsx'|'aws:kms'|'aws:kms:dsse',
     *     KMSMasterKeyID?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
