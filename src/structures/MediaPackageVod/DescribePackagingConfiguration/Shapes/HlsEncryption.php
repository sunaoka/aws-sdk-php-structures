<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\DescribePackagingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConstantInitializationVector
 * @property 'AES_128'|'SAMPLE_AES' $EncryptionMethod
 * @property SpekeKeyProvider $SpekeKeyProvider
 */
class HlsEncryption extends Shape
{
    /**
     * @param array{
     *     ConstantInitializationVector?: string,
     *     EncryptionMethod?: 'AES_128'|'SAMPLE_AES',
     *     SpekeKeyProvider: SpekeKeyProvider
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
