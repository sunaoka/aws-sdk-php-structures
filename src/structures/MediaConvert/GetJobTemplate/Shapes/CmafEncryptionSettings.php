<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConstantInitializationVector
 * @property 'SAMPLE_AES'|'AES_CTR' $EncryptionMethod
 * @property 'INCLUDE'|'EXCLUDE' $InitializationVectorInManifest
 * @property SpekeKeyProviderCmaf $SpekeKeyProvider
 * @property StaticKeyProvider $StaticKeyProvider
 * @property 'SPEKE'|'STATIC_KEY' $Type
 */
class CmafEncryptionSettings extends Shape
{
    /**
     * @param array{
     *     ConstantInitializationVector?: string,
     *     EncryptionMethod?: 'SAMPLE_AES'|'AES_CTR',
     *     InitializationVectorInManifest?: 'INCLUDE'|'EXCLUDE',
     *     SpekeKeyProvider?: SpekeKeyProviderCmaf,
     *     StaticKeyProvider?: StaticKeyProvider,
     *     Type?: 'SPEKE'|'STATIC_KEY'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
