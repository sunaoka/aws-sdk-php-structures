<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DashPlaylistSettings|null $DashPlaylistSettings
 * @property HlsPlaylistSettings|null $HlsPlaylistSettings
 * @property string $ManifestName
 * @property string $PlaybackUrl
 * @property string $SourceGroup
 */
class ResponseOutputItem extends Shape
{
    /**
     * @param array{
     *     DashPlaylistSettings?: DashPlaylistSettings|null,
     *     HlsPlaylistSettings?: HlsPlaylistSettings|null,
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
