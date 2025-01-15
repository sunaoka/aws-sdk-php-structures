<?php

namespace Sunaoka\Aws\Structures\MediaPackage\UpdateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CmafEncryption|null $Encryption
 * @property list<HlsManifest>|null $HlsManifests
 * @property int|null $SegmentDurationSeconds
 * @property string|null $SegmentPrefix
 * @property StreamSelection|null $StreamSelection
 */
class CmafPackage extends Shape
{
    /**
     * @param array{
     *     Encryption?: CmafEncryption|null,
     *     HlsManifests?: list<HlsManifest>|null,
     *     SegmentDurationSeconds?: int|null,
     *     SegmentPrefix?: string|null,
     *     StreamSelection?: StreamSelection|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
