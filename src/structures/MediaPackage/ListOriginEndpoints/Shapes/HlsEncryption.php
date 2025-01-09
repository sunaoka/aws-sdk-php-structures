<?php

namespace Sunaoka\Aws\Structures\MediaPackage\ListOriginEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConstantInitializationVector
 * @property 'AES_128'|'SAMPLE_AES' $EncryptionMethod
 * @property int $KeyRotationIntervalSeconds
 * @property bool $RepeatExtXKey
 * @property SpekeKeyProvider $SpekeKeyProvider
 */
class HlsEncryption extends Shape
{
    /**
     * @param array{
     *     ConstantInitializationVector?: string,
     *     EncryptionMethod?: 'AES_128'|'SAMPLE_AES',
     *     KeyRotationIntervalSeconds?: int,
     *     RepeatExtXKey?: bool,
     *     SpekeKeyProvider: SpekeKeyProvider
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
