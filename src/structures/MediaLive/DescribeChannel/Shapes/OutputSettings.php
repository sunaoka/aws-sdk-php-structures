<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ArchiveOutputSettings $ArchiveOutputSettings
 * @property FrameCaptureOutputSettings $FrameCaptureOutputSettings
 * @property HlsOutputSettings $HlsOutputSettings
 * @property MediaPackageOutputSettings $MediaPackageOutputSettings
 * @property MsSmoothOutputSettings $MsSmoothOutputSettings
 * @property MultiplexOutputSettings $MultiplexOutputSettings
 * @property RtmpOutputSettings $RtmpOutputSettings
 * @property UdpOutputSettings $UdpOutputSettings
 * @property CmafIngestOutputSettings $CmafIngestOutputSettings
 * @property SrtOutputSettings $SrtOutputSettings
 */
class OutputSettings extends Shape
{
    /**
     * @param array{
     *     ArchiveOutputSettings?: ArchiveOutputSettings,
     *     FrameCaptureOutputSettings?: FrameCaptureOutputSettings,
     *     HlsOutputSettings?: HlsOutputSettings,
     *     MediaPackageOutputSettings?: MediaPackageOutputSettings,
     *     MsSmoothOutputSettings?: MsSmoothOutputSettings,
     *     MultiplexOutputSettings?: MultiplexOutputSettings,
     *     RtmpOutputSettings?: RtmpOutputSettings,
     *     UdpOutputSettings?: UdpOutputSettings,
     *     CmafIngestOutputSettings?: CmafIngestOutputSettings,
     *     SrtOutputSettings?: SrtOutputSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
