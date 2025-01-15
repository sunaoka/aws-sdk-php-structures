<?php

namespace Sunaoka\Aws\Structures\MediaPackage\CreateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MssEncryption|null $Encryption
 * @property int|null $ManifestWindowSeconds
 * @property int|null $SegmentDurationSeconds
 * @property StreamSelection|null $StreamSelection
 */
class MssPackage extends Shape
{
    /**
     * @param array{
     *     Encryption?: MssEncryption|null,
     *     ManifestWindowSeconds?: int|null,
     *     SegmentDurationSeconds?: int|null,
     *     StreamSelection?: StreamSelection|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
