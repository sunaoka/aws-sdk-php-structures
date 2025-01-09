<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $AudioFramesPerPes
 * @property string $AudioPids
 * @property string $EcmPid
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH' $NielsenId3Behavior
 * @property int<0, 1000> $PatInterval
 * @property 'CONFIGURED_PCR_PERIOD'|'PCR_EVERY_PES_PACKET' $PcrControl
 * @property int<0, 500> $PcrPeriod
 * @property string $PcrPid
 * @property int<0, 1000> $PmtInterval
 * @property string $PmtPid
 * @property int<0, 65535> $ProgramNum
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH' $Scte35Behavior
 * @property string $Scte35Pid
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH' $TimedMetadataBehavior
 * @property string $TimedMetadataPid
 * @property int<0, 65535> $TransportStreamId
 * @property string $VideoPid
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH' $KlvBehavior
 * @property string $KlvDataPids
 */
class M3u8Settings extends Shape
{
    /**
     * @param array{
     *     AudioFramesPerPes?: int<0, max>,
     *     AudioPids?: string,
     *     EcmPid?: string,
     *     NielsenId3Behavior?: 'NO_PASSTHROUGH'|'PASSTHROUGH',
     *     PatInterval?: int<0, 1000>,
     *     PcrControl?: 'CONFIGURED_PCR_PERIOD'|'PCR_EVERY_PES_PACKET',
     *     PcrPeriod?: int<0, 500>,
     *     PcrPid?: string,
     *     PmtInterval?: int<0, 1000>,
     *     PmtPid?: string,
     *     ProgramNum?: int<0, 65535>,
     *     Scte35Behavior?: 'NO_PASSTHROUGH'|'PASSTHROUGH',
     *     Scte35Pid?: string,
     *     TimedMetadataBehavior?: 'NO_PASSTHROUGH'|'PASSTHROUGH',
     *     TimedMetadataPid?: string,
     *     TransportStreamId?: int<0, 65535>,
     *     VideoPid?: string,
     *     KlvBehavior?: 'NO_PASSTHROUGH'|'PASSTHROUGH',
     *     KlvDataPids?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
