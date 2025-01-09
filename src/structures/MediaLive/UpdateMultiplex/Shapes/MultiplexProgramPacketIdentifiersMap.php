<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateMultiplex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<int> $AudioPids
 * @property list<int> $DvbSubPids
 * @property int $DvbTeletextPid
 * @property int $EtvPlatformPid
 * @property int $EtvSignalPid
 * @property list<int> $KlvDataPids
 * @property int $PcrPid
 * @property int $PmtPid
 * @property int $PrivateMetadataPid
 * @property list<int> $Scte27Pids
 * @property int $Scte35Pid
 * @property int $TimedMetadataPid
 * @property int $VideoPid
 * @property int $AribCaptionsPid
 * @property list<int> $DvbTeletextPids
 * @property int $EcmPid
 * @property int $Smpte2038Pid
 */
class MultiplexProgramPacketIdentifiersMap extends Shape
{
    /**
     * @param array{
     *     AudioPids?: list<int>,
     *     DvbSubPids?: list<int>,
     *     DvbTeletextPid?: int,
     *     EtvPlatformPid?: int,
     *     EtvSignalPid?: int,
     *     KlvDataPids?: list<int>,
     *     PcrPid?: int,
     *     PmtPid?: int,
     *     PrivateMetadataPid?: int,
     *     Scte27Pids?: list<int>,
     *     Scte35Pid?: int,
     *     TimedMetadataPid?: int,
     *     VideoPid?: int,
     *     AribCaptionsPid?: int,
     *     DvbTeletextPids?: list<int>,
     *     EcmPid?: int,
     *     Smpte2038Pid?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
