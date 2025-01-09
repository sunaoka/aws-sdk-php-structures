<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\CreateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConstantInitializationVector
 * @property EncryptionMethod $EncryptionMethod
 * @property int $KeyRotationIntervalSeconds
 * @property SpekeKeyProvider $SpekeKeyProvider
 */
class Encryption extends Shape
{
    /**
     * @param array{
     *     ConstantInitializationVector?: string,
     *     EncryptionMethod: EncryptionMethod,
     *     KeyRotationIntervalSeconds?: int,
     *     SpekeKeyProvider: SpekeKeyProvider
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
