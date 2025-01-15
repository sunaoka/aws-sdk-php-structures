<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AES_CTR'|'AES_CBC'|'AES_GCM'|null $DecryptionMode
 * @property string|null $EncryptedDecryptionKey
 * @property string|null $InitializationVector
 * @property string|null $KmsKeyRegion
 */
class InputDecryptionSettings extends Shape
{
    /**
     * @param array{
     *     DecryptionMode?: 'AES_CTR'|'AES_CBC'|'AES_GCM'|null,
     *     EncryptedDecryptionKey?: string|null,
     *     InitializationVector?: string|null,
     *     KmsKeyRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
