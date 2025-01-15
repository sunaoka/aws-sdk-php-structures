<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConstantInitializationVector
 * @property 'SAMPLE_AES'|'AES_CTR'|null $EncryptionMethod
 * @property 'INCLUDE'|'EXCLUDE'|null $InitializationVectorInManifest
 * @property SpekeKeyProviderCmaf|null $SpekeKeyProvider
 * @property StaticKeyProvider|null $StaticKeyProvider
 * @property 'SPEKE'|'STATIC_KEY'|null $Type
 */
class CmafEncryptionSettings extends Shape
{
    /**
     * @param array{
     *     ConstantInitializationVector?: string|null,
     *     EncryptionMethod?: 'SAMPLE_AES'|'AES_CTR'|null,
     *     InitializationVectorInManifest?: 'INCLUDE'|'EXCLUDE'|null,
     *     SpekeKeyProvider?: SpekeKeyProviderCmaf|null,
     *     StaticKeyProvider?: StaticKeyProvider|null,
     *     Type?: 'SPEKE'|'STATIC_KEY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
