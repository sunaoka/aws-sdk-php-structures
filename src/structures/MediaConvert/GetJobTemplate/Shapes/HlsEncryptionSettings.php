<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConstantInitializationVector
 * @property 'AES128'|'SAMPLE_AES'|null $EncryptionMethod
 * @property 'INCLUDE'|'EXCLUDE'|null $InitializationVectorInManifest
 * @property 'ENABLED'|'DISABLED'|null $OfflineEncrypted
 * @property SpekeKeyProvider|null $SpekeKeyProvider
 * @property StaticKeyProvider|null $StaticKeyProvider
 * @property 'SPEKE'|'STATIC_KEY'|null $Type
 */
class HlsEncryptionSettings extends Shape
{
    /**
     * @param array{
     *     ConstantInitializationVector?: string|null,
     *     EncryptionMethod?: 'AES128'|'SAMPLE_AES'|null,
     *     InitializationVectorInManifest?: 'INCLUDE'|'EXCLUDE'|null,
     *     OfflineEncrypted?: 'ENABLED'|'DISABLED'|null,
     *     SpekeKeyProvider?: SpekeKeyProvider|null,
     *     StaticKeyProvider?: StaticKeyProvider|null,
     *     Type?: 'SPEKE'|'STATIC_KEY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
