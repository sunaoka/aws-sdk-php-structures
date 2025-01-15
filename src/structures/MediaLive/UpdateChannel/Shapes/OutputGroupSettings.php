<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ArchiveGroupSettings|null $ArchiveGroupSettings
 * @property FrameCaptureGroupSettings|null $FrameCaptureGroupSettings
 * @property HlsGroupSettings|null $HlsGroupSettings
 * @property MediaPackageGroupSettings|null $MediaPackageGroupSettings
 * @property MsSmoothGroupSettings|null $MsSmoothGroupSettings
 * @property MultiplexGroupSettings|null $MultiplexGroupSettings
 * @property RtmpGroupSettings|null $RtmpGroupSettings
 * @property UdpGroupSettings|null $UdpGroupSettings
 * @property CmafIngestGroupSettings|null $CmafIngestGroupSettings
 * @property SrtGroupSettings|null $SrtGroupSettings
 */
class OutputGroupSettings extends Shape
{
    /**
     * @param array{
     *     ArchiveGroupSettings?: ArchiveGroupSettings|null,
     *     FrameCaptureGroupSettings?: FrameCaptureGroupSettings|null,
     *     HlsGroupSettings?: HlsGroupSettings|null,
     *     MediaPackageGroupSettings?: MediaPackageGroupSettings|null,
     *     MsSmoothGroupSettings?: MsSmoothGroupSettings|null,
     *     MultiplexGroupSettings?: MultiplexGroupSettings|null,
     *     RtmpGroupSettings?: RtmpGroupSettings|null,
     *     UdpGroupSettings?: UdpGroupSettings|null,
     *     CmafIngestGroupSettings?: CmafIngestGroupSettings|null,
     *     SrtGroupSettings?: SrtGroupSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
