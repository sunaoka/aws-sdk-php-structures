<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\CreatePackagingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConstantInitializationVector
 * @property 'AES_128'|'SAMPLE_AES'|null $EncryptionMethod
 * @property SpekeKeyProvider $SpekeKeyProvider
 */
class HlsEncryption extends Shape
{
    /**
     * @param array{
     *     ConstantInitializationVector?: string|null,
     *     EncryptionMethod?: 'AES_128'|'SAMPLE_AES'|null,
     *     SpekeKeyProvider: SpekeKeyProvider
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
