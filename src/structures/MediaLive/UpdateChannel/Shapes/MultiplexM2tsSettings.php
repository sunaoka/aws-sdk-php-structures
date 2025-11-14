<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DROP'|'ENCODE_SILENCE'|null $AbsentInputAudioBehavior
 * @property 'DISABLED'|'ENABLED'|null $Arib
 * @property 'ATSC'|'DVB'|null $AudioBufferModel
 * @property int|null $AudioFramesPerPes
 * @property 'ATSC'|'DVB'|null $AudioStreamType
 * @property 'DISABLED'|'ENABLED'|null $CcDescriptor
 * @property 'NONE'|'PASSTHROUGH'|null $Ebif
 * @property 'EXCLUDE'|'INCLUDE'|null $EsRateInPes
 * @property 'NONE'|'PASSTHROUGH'|null $Klv
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH'|null $NielsenId3Behavior
 * @property 'CONFIGURED_PCR_PERIOD'|'PCR_EVERY_PES_PACKET'|null $PcrControl
 * @property int|null $PcrPeriod
 * @property 'NONE'|'PASSTHROUGH'|null $Scte35Control
 * @property double|null $Scte35PrerollPullupMilliseconds
 */
class MultiplexM2tsSettings extends Shape
{
    /**
     * @param array{
     *     AbsentInputAudioBehavior?: 'DROP'|'ENCODE_SILENCE'|null,
     *     Arib?: 'DISABLED'|'ENABLED'|null,
     *     AudioBufferModel?: 'ATSC'|'DVB'|null,
     *     AudioFramesPerPes?: int|null,
     *     AudioStreamType?: 'ATSC'|'DVB'|null,
     *     CcDescriptor?: 'DISABLED'|'ENABLED'|null,
     *     Ebif?: 'NONE'|'PASSTHROUGH'|null,
     *     EsRateInPes?: 'EXCLUDE'|'INCLUDE'|null,
     *     Klv?: 'NONE'|'PASSTHROUGH'|null,
     *     NielsenId3Behavior?: 'NO_PASSTHROUGH'|'PASSTHROUGH'|null,
     *     PcrControl?: 'CONFIGURED_PCR_PERIOD'|'PCR_EVERY_PES_PACKET'|null,
     *     PcrPeriod?: int|null,
     *     Scte35Control?: 'NONE'|'PASSTHROUGH'|null,
     *     Scte35PrerollPullupMilliseconds?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
