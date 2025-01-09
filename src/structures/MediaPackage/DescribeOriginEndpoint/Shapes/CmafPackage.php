<?php

namespace Sunaoka\Aws\Structures\MediaPackage\DescribeOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CmafEncryption $Encryption
 * @property list<HlsManifest> $HlsManifests
 * @property int $SegmentDurationSeconds
 * @property string $SegmentPrefix
 * @property StreamSelection $StreamSelection
 */
class CmafPackage extends Shape
{
    /**
     * @param array{
     *     Encryption?: CmafEncryption,
     *     HlsManifests?: list<HlsManifest>,
     *     SegmentDurationSeconds?: int,
     *     SegmentPrefix?: string,
     *     StreamSelection?: StreamSelection
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
