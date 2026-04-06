<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'DATERANGE'|'SCTE35_ENHANCED'>|null $AdMarkupType
 * @property int|null $ManifestWindowSeconds
 */
class HlsPlaylistSettings extends Shape
{
    /**
     * @param array{
     *     AdMarkupType?: list<'DATERANGE'|'SCTE35_ENHANCED'>|null,
     *     ManifestWindowSeconds?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
