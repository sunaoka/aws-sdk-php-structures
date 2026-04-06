<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ArchiveOutputSettings|null $ArchiveOutputSettings
 * @property FrameCaptureOutputSettings|null $FrameCaptureOutputSettings
 * @property HlsOutputSettings|null $HlsOutputSettings
 * @property MediaPackageOutputSettings|null $MediaPackageOutputSettings
 * @property MsSmoothOutputSettings|null $MsSmoothOutputSettings
 * @property MultiplexOutputSettings|null $MultiplexOutputSettings
 * @property RtmpOutputSettings|null $RtmpOutputSettings
 * @property UdpOutputSettings|null $UdpOutputSettings
 * @property CmafIngestOutputSettings|null $CmafIngestOutputSettings
 * @property SrtOutputSettings|null $SrtOutputSettings
 */
class OutputSettings extends Shape
{
    /**
     * @param array{
     *     ArchiveOutputSettings?: ArchiveOutputSettings|null,
     *     FrameCaptureOutputSettings?: FrameCaptureOutputSettings|null,
     *     HlsOutputSettings?: HlsOutputSettings|null,
     *     MediaPackageOutputSettings?: MediaPackageOutputSettings|null,
     *     MsSmoothOutputSettings?: MsSmoothOutputSettings|null,
     *     MultiplexOutputSettings?: MultiplexOutputSettings|null,
     *     RtmpOutputSettings?: RtmpOutputSettings|null,
     *     UdpOutputSettings?: UdpOutputSettings|null,
     *     CmafIngestOutputSettings?: CmafIngestOutputSettings|null,
     *     SrtOutputSettings?: SrtOutputSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
