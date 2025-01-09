<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AES_CTR'|'AES_CBC'|'AES_GCM' $DecryptionMode
 * @property string $EncryptedDecryptionKey
 * @property string $InitializationVector
 * @property string $KmsKeyRegion
 */
class InputDecryptionSettings extends Shape
{
    /**
     * @param array{
     *     DecryptionMode?: 'AES_CTR'|'AES_CBC'|'AES_GCM',
     *     EncryptedDecryptionKey?: string,
     *     InitializationVector?: string,
     *     KmsKeyRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
