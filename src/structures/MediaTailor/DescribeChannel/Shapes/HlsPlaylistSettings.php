<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'DATERANGE'|'SCTE35_ENHANCED'> $AdMarkupType
 * @property int $ManifestWindowSeconds
 */
class HlsPlaylistSettings extends Shape
{
    /**
     * @param array{
     *     AdMarkupType?: list<'DATERANGE'|'SCTE35_ENHANCED'>,
     *     ManifestWindowSeconds?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
