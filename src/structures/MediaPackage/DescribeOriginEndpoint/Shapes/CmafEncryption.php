<?php

namespace Sunaoka\Aws\Structures\MediaPackage\DescribeOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConstantInitializationVector
 * @property 'SAMPLE_AES'|'AES_CTR' $EncryptionMethod
 * @property int $KeyRotationIntervalSeconds
 * @property SpekeKeyProvider $SpekeKeyProvider
 */
class CmafEncryption extends Shape
{
    /**
     * @param array{
     *     ConstantInitializationVector?: string,
     *     EncryptionMethod?: 'SAMPLE_AES'|'AES_CTR',
     *     KeyRotationIntervalSeconds?: int,
     *     SpekeKeyProvider: SpekeKeyProvider
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
