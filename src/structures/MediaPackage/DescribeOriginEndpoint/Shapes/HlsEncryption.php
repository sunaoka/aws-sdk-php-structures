<?php

namespace Sunaoka\Aws\Structures\MediaPackage\DescribeOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConstantInitializationVector
 * @property 'AES_128'|'SAMPLE_AES'|null $EncryptionMethod
 * @property int|null $KeyRotationIntervalSeconds
 * @property bool|null $RepeatExtXKey
 * @property SpekeKeyProvider $SpekeKeyProvider
 */
class HlsEncryption extends Shape
{
    /**
     * @param array{
     *     ConstantInitializationVector?: string|null,
     *     EncryptionMethod?: 'AES_128'|'SAMPLE_AES'|null,
     *     KeyRotationIntervalSeconds?: int|null,
     *     RepeatExtXKey?: bool|null,
     *     SpekeKeyProvider: SpekeKeyProvider
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
