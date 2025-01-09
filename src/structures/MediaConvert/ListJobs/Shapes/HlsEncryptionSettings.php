<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConstantInitializationVector
 * @property 'AES128'|'SAMPLE_AES' $EncryptionMethod
 * @property 'INCLUDE'|'EXCLUDE' $InitializationVectorInManifest
 * @property 'ENABLED'|'DISABLED' $OfflineEncrypted
 * @property SpekeKeyProvider $SpekeKeyProvider
 * @property StaticKeyProvider $StaticKeyProvider
 * @property 'SPEKE'|'STATIC_KEY' $Type
 */
class HlsEncryptionSettings extends Shape
{
    /**
     * @param array{
     *     ConstantInitializationVector?: string,
     *     EncryptionMethod?: 'AES128'|'SAMPLE_AES',
     *     InitializationVectorInManifest?: 'INCLUDE'|'EXCLUDE',
     *     OfflineEncrypted?: 'ENABLED'|'DISABLED',
     *     SpekeKeyProvider?: SpekeKeyProvider,
     *     StaticKeyProvider?: StaticKeyProvider,
     *     Type?: 'SPEKE'|'STATIC_KEY'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
