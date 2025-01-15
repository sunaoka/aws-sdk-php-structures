<?php

namespace Sunaoka\Aws\Structures\MediaPackage\CreateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConstantInitializationVector
 * @property 'SAMPLE_AES'|'AES_CTR'|null $EncryptionMethod
 * @property int|null $KeyRotationIntervalSeconds
 * @property SpekeKeyProvider $SpekeKeyProvider
 */
class CmafEncryption extends Shape
{
    /**
     * @param array{
     *     ConstantInitializationVector?: string|null,
     *     EncryptionMethod?: 'SAMPLE_AES'|'AES_CTR'|null,
     *     KeyRotationIntervalSeconds?: int|null,
     *     SpekeKeyProvider: SpekeKeyProvider
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
