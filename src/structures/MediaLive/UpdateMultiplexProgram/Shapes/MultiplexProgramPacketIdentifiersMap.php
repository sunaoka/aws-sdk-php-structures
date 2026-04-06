<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateMultiplexProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<int>|null $AudioPids
 * @property list<int>|null $DvbSubPids
 * @property int|null $DvbTeletextPid
 * @property int|null $EtvPlatformPid
 * @property int|null $EtvSignalPid
 * @property list<int>|null $KlvDataPids
 * @property int|null $PcrPid
 * @property int|null $PmtPid
 * @property int|null $PrivateMetadataPid
 * @property list<int>|null $Scte27Pids
 * @property int|null $Scte35Pid
 * @property int|null $TimedMetadataPid
 * @property int|null $VideoPid
 * @property int|null $AribCaptionsPid
 * @property list<int>|null $DvbTeletextPids
 * @property int|null $EcmPid
 * @property int|null $Smpte2038Pid
 */
class MultiplexProgramPacketIdentifiersMap extends Shape
{
    /**
     * @param array{
     *     AudioPids?: list<int>|null,
     *     DvbSubPids?: list<int>|null,
     *     DvbTeletextPid?: int|null,
     *     EtvPlatformPid?: int|null,
     *     EtvSignalPid?: int|null,
     *     KlvDataPids?: list<int>|null,
     *     PcrPid?: int|null,
     *     PmtPid?: int|null,
     *     PrivateMetadataPid?: int|null,
     *     Scte27Pids?: list<int>|null,
     *     Scte35Pid?: int|null,
     *     TimedMetadataPid?: int|null,
     *     VideoPid?: int|null,
     *     AribCaptionsPid?: int|null,
     *     DvbTeletextPids?: list<int>|null,
     *     EcmPid?: int|null,
     *     Smpte2038Pid?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
