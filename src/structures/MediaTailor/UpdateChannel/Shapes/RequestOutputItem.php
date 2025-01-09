<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DashPlaylistSettings $DashPlaylistSettings
 * @property HlsPlaylistSettings $HlsPlaylistSettings
 * @property string $ManifestName
 * @property string $SourceGroup
 */
class RequestOutputItem extends Shape
{
    /**
     * @param array{
     *     DashPlaylistSettings?: DashPlaylistSettings,
     *     HlsPlaylistSettings?: HlsPlaylistSettings,
     *     ManifestName: string,
     *     SourceGroup: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
