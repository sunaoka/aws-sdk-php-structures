<?php

namespace Sunaoka\Aws\Structures\MediaPackage\CreateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MssEncryption $Encryption
 * @property int $ManifestWindowSeconds
 * @property int $SegmentDurationSeconds
 * @property StreamSelection $StreamSelection
 */
class MssPackage extends Shape
{
    /**
     * @param array{
     *     Encryption?: MssEncryption,
     *     ManifestWindowSeconds?: int,
     *     SegmentDurationSeconds?: int,
     *     StreamSelection?: StreamSelection
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
