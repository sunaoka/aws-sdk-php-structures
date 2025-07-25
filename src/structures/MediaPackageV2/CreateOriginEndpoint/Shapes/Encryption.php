<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\CreateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConstantInitializationVector
 * @property EncryptionMethod $EncryptionMethod
 * @property int<300, 31536000>|null $KeyRotationIntervalSeconds
 * @property bool|null $CmafExcludeSegmentDrmMetadata
 * @property SpekeKeyProvider $SpekeKeyProvider
 */
class Encryption extends Shape
{
    /**
     * @param array{
     *     ConstantInitializationVector?: string|null,
     *     EncryptionMethod: EncryptionMethod,
     *     KeyRotationIntervalSeconds?: int<300, 31536000>|null,
     *     CmafExcludeSegmentDrmMetadata?: bool|null,
     *     SpekeKeyProvider: SpekeKeyProvider
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
