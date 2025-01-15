<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $AudioFramesPerPes
 * @property string|null $AudioPids
 * @property string|null $EcmPid
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH'|null $NielsenId3Behavior
 * @property int<0, 1000>|null $PatInterval
 * @property 'CONFIGURED_PCR_PERIOD'|'PCR_EVERY_PES_PACKET'|null $PcrControl
 * @property int<0, 500>|null $PcrPeriod
 * @property string|null $PcrPid
 * @property int<0, 1000>|null $PmtInterval
 * @property string|null $PmtPid
 * @property int<0, 65535>|null $ProgramNum
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH'|null $Scte35Behavior
 * @property string|null $Scte35Pid
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH'|null $TimedMetadataBehavior
 * @property string|null $TimedMetadataPid
 * @property int<0, 65535>|null $TransportStreamId
 * @property string|null $VideoPid
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH'|null $KlvBehavior
 * @property string|null $KlvDataPids
 */
class M3u8Settings extends Shape
{
    /**
     * @param array{
     *     AudioFramesPerPes?: int<0, max>|null,
     *     AudioPids?: string|null,
     *     EcmPid?: string|null,
     *     NielsenId3Behavior?: 'NO_PASSTHROUGH'|'PASSTHROUGH'|null,
     *     PatInterval?: int<0, 1000>|null,
     *     PcrControl?: 'CONFIGURED_PCR_PERIOD'|'PCR_EVERY_PES_PACKET'|null,
     *     PcrPeriod?: int<0, 500>|null,
     *     PcrPid?: string|null,
     *     PmtInterval?: int<0, 1000>|null,
     *     PmtPid?: string|null,
     *     ProgramNum?: int<0, 65535>|null,
     *     Scte35Behavior?: 'NO_PASSTHROUGH'|'PASSTHROUGH'|null,
     *     Scte35Pid?: string|null,
     *     TimedMetadataBehavior?: 'NO_PASSTHROUGH'|'PASSTHROUGH'|null,
     *     TimedMetadataPid?: string|null,
     *     TransportStreamId?: int<0, 65535>|null,
     *     VideoPid?: string|null,
     *     KlvBehavior?: 'NO_PASSTHROUGH'|'PASSTHROUGH'|null,
     *     KlvDataPids?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
