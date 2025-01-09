<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DashPlaylistSettings $DashPlaylistSettings
 * @property HlsPlaylistSettings $HlsPlaylistSettings
 * @property string $ManifestName
 * @property string $PlaybackUrl
 * @property string $SourceGroup
 */
class ResponseOutputItem extends Shape
{
    /**
     * @param array{
     *     DashPlaylistSettings?: DashPlaylistSettings,
     *     HlsPlaylistSettings?: HlsPlaylistSettings,
     *     ManifestName: string,
     *     PlaybackUrl: string,
     *     SourceGroup: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
