<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ManifestWindowSeconds
 * @property list<'DATERANGE'|'SCTE35_ENHANCED'>|null $AdMarkupType
 */
class HlsPlaylistSettings extends Shape
{
    /**
     * @param array{
     *     ManifestWindowSeconds?: int|null,
     *     AdMarkupType?: list<'DATERANGE'|'SCTE35_ENHANCED'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
