<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ArchiveGroupSettings $ArchiveGroupSettings
 * @property FrameCaptureGroupSettings $FrameCaptureGroupSettings
 * @property HlsGroupSettings $HlsGroupSettings
 * @property MediaPackageGroupSettings $MediaPackageGroupSettings
 * @property MsSmoothGroupSettings $MsSmoothGroupSettings
 * @property MultiplexGroupSettings $MultiplexGroupSettings
 * @property RtmpGroupSettings $RtmpGroupSettings
 * @property UdpGroupSettings $UdpGroupSettings
 * @property CmafIngestGroupSettings $CmafIngestGroupSettings
 * @property SrtGroupSettings $SrtGroupSettings
 */
class OutputGroupSettings extends Shape
{
    /**
     * @param array{
     *     ArchiveGroupSettings?: ArchiveGroupSettings,
     *     FrameCaptureGroupSettings?: FrameCaptureGroupSettings,
     *     HlsGroupSettings?: HlsGroupSettings,
     *     MediaPackageGroupSettings?: MediaPackageGroupSettings,
     *     MsSmoothGroupSettings?: MsSmoothGroupSettings,
     *     MultiplexGroupSettings?: MultiplexGroupSettings,
     *     RtmpGroupSettings?: RtmpGroupSettings,
     *     UdpGroupSettings?: UdpGroupSettings,
     *     CmafIngestGroupSettings?: CmafIngestGroupSettings,
     *     SrtGroupSettings?: SrtGroupSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
