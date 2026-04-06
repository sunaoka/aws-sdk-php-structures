<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTableBucketEncryption;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableBucketARN
 * @property Shapes\EncryptionConfiguration $encryptionConfiguration
 */
class PutTableBucketEncryptionRequest extends Request
{
    /**
     * @param array{
     *     tableBucketARN: string,
     *     encryptionConfiguration: Shapes\EncryptionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
