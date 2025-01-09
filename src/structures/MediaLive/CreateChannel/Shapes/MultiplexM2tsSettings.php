<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DROP'|'ENCODE_SILENCE' $AbsentInputAudioBehavior
 * @property 'DISABLED'|'ENABLED' $Arib
 * @property 'ATSC'|'DVB' $AudioBufferModel
 * @property int<0, max> $AudioFramesPerPes
 * @property 'ATSC'|'DVB' $AudioStreamType
 * @property 'DISABLED'|'ENABLED' $CcDescriptor
 * @property 'NONE'|'PASSTHROUGH' $Ebif
 * @property 'EXCLUDE'|'INCLUDE' $EsRateInPes
 * @property 'NONE'|'PASSTHROUGH' $Klv
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH' $NielsenId3Behavior
 * @property 'CONFIGURED_PCR_PERIOD'|'PCR_EVERY_PES_PACKET' $PcrControl
 * @property int<0, 500> $PcrPeriod
 * @property 'NONE'|'PASSTHROUGH' $Scte35Control
 * @property double $Scte35PrerollPullupMilliseconds
 */
class MultiplexM2tsSettings extends Shape
{
    /**
     * @param array{
     *     AbsentInputAudioBehavior?: 'DROP'|'ENCODE_SILENCE',
     *     Arib?: 'DISABLED'|'ENABLED',
     *     AudioBufferModel?: 'ATSC'|'DVB',
     *     AudioFramesPerPes?: int<0, max>,
     *     AudioStreamType?: 'ATSC'|'DVB',
     *     CcDescriptor?: 'DISABLED'|'ENABLED',
     *     Ebif?: 'NONE'|'PASSTHROUGH',
     *     EsRateInPes?: 'EXCLUDE'|'INCLUDE',
     *     Klv?: 'NONE'|'PASSTHROUGH',
     *     NielsenId3Behavior?: 'NO_PASSTHROUGH'|'PASSTHROUGH',
     *     PcrControl?: 'CONFIGURED_PCR_PERIOD'|'PCR_EVERY_PES_PACKET',
     *     PcrPeriod?: int<0, 500>,
     *     Scte35Control?: 'NONE'|'PASSTHROUGH',
     *     Scte35PrerollPullupMilliseconds?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
