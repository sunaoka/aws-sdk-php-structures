<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $AudioFramesPerPes
 * @property string|null $AudioPids
 * @property string|null $EcmPid
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH'|null $NielsenId3Behavior
 * @property int|null $PatInterval
 * @property 'CONFIGURED_PCR_PERIOD'|'PCR_EVERY_PES_PACKET'|null $PcrControl
 * @property int|null $PcrPeriod
 * @property string|null $PcrPid
 * @property int|null $PmtInterval
 * @property string|null $PmtPid
 * @property int|null $ProgramNum
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH'|null $Scte35Behavior
 * @property string|null $Scte35Pid
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH'|null $TimedMetadataBehavior
 * @property string|null $TimedMetadataPid
 * @property int|null $TransportStreamId
 * @property string|null $VideoPid
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH'|null $KlvBehavior
 * @property string|null $KlvDataPids
 */
class M3u8Settings extends Shape
{
    /**
     * @param array{
     *     AudioFramesPerPes?: int|null,
     *     AudioPids?: string|null,
     *     EcmPid?: string|null,
     *     NielsenId3Behavior?: 'NO_PASSTHROUGH'|'PASSTHROUGH'|null,
     *     PatInterval?: int|null,
     *     PcrControl?: 'CONFIGURED_PCR_PERIOD'|'PCR_EVERY_PES_PACKET'|null,
     *     PcrPeriod?: int|null,
     *     PcrPid?: string|null,
     *     PmtInterval?: int|null,
     *     PmtPid?: string|null,
     *     ProgramNum?: int|null,
     *     Scte35Behavior?: 'NO_PASSTHROUGH'|'PASSTHROUGH'|null,
     *     Scte35Pid?: string|null,
     *     TimedMetadataBehavior?: 'NO_PASSTHROUGH'|'PASSTHROUGH'|null,
     *     TimedMetadataPid?: string|null,
     *     TransportStreamId?: int|null,
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
