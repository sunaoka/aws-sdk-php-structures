<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableEncryption\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AES256'|'aws:kms' $sseAlgorithm
 * @property string|null $kmsKeyArn
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     sseAlgorithm: 'AES256'|'aws:kms',
     *     kmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
