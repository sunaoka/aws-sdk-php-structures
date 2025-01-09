<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AudioFramesPerPes
 * @property string $AudioPids
 * @property string $EcmPid
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH' $NielsenId3Behavior
 * @property int $PatInterval
 * @property 'CONFIGURED_PCR_PERIOD'|'PCR_EVERY_PES_PACKET' $PcrControl
 * @property int $PcrPeriod
 * @property string $PcrPid
 * @property int $PmtInterval
 * @property string $PmtPid
 * @property int $ProgramNum
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH' $Scte35Behavior
 * @property string $Scte35Pid
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH' $TimedMetadataBehavior
 * @property string $TimedMetadataPid
 * @property int $TransportStreamId
 * @property string $VideoPid
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH' $KlvBehavior
 * @property string $KlvDataPids
 */
class M3u8Settings extends Shape
{
    /**
     * @param array{
     *     AudioFramesPerPes?: int,
     *     AudioPids?: string,
     *     EcmPid?: string,
     *     NielsenId3Behavior?: 'NO_PASSTHROUGH'|'PASSTHROUGH',
     *     PatInterval?: int,
     *     PcrControl?: 'CONFIGURED_PCR_PERIOD'|'PCR_EVERY_PES_PACKET',
     *     PcrPeriod?: int,
     *     PcrPid?: string,
     *     PmtInterval?: int,
     *     PmtPid?: string,
     *     ProgramNum?: int,
     *     Scte35Behavior?: 'NO_PASSTHROUGH'|'PASSTHROUGH',
     *     Scte35Pid?: string,
     *     TimedMetadataBehavior?: 'NO_PASSTHROUGH'|'PASSTHROUGH',
     *     TimedMetadataPid?: string,
     *     TransportStreamId?: int,
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
