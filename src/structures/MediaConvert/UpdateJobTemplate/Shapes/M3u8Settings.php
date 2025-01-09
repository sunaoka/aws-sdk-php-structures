<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT_CODEC_DURATION'|'MATCH_VIDEO_DURATION' $AudioDuration
 * @property int<0, 2147483647> $AudioFramesPerPes
 * @property list<int<32, 8182>> $AudioPids
 * @property 'AUTO'|'ALIGN_TO_VIDEO' $DataPTSControl
 * @property int<0, 500> $MaxPcrInterval
 * @property 'INSERT'|'NONE' $NielsenId3
 * @property int<0, 1000> $PatInterval
 * @property 'PCR_EVERY_PES_PACKET'|'CONFIGURED_PCR_PERIOD' $PcrControl
 * @property int<32, 8182> $PcrPid
 * @property int<0, 1000> $PmtInterval
 * @property int<32, 8182> $PmtPid
 * @property int<32, 8182> $PrivateMetadataPid
 * @property int<0, 65535> $ProgramNumber
 * @property int<0, 3600> $PtsOffset
 * @property 'AUTO'|'SECONDS' $PtsOffsetMode
 * @property int<32, 8182> $Scte35Pid
 * @property 'PASSTHROUGH'|'NONE' $Scte35Source
 * @property 'PASSTHROUGH'|'NONE' $TimedMetadata
 * @property int<32, 8182> $TimedMetadataPid
 * @property int<0, 65535> $TransportStreamId
 * @property int<32, 8182> $VideoPid
 */
class M3u8Settings extends Shape
{
    /**
     * @param array{
     *     AudioDuration?: 'DEFAULT_CODEC_DURATION'|'MATCH_VIDEO_DURATION',
     *     AudioFramesPerPes?: int<0, 2147483647>,
     *     AudioPids?: list<int<32, 8182>>,
     *     DataPTSControl?: 'AUTO'|'ALIGN_TO_VIDEO',
     *     MaxPcrInterval?: int<0, 500>,
     *     NielsenId3?: 'INSERT'|'NONE',
     *     PatInterval?: int<0, 1000>,
     *     PcrControl?: 'PCR_EVERY_PES_PACKET'|'CONFIGURED_PCR_PERIOD',
     *     PcrPid?: int<32, 8182>,
     *     PmtInterval?: int<0, 1000>,
     *     PmtPid?: int<32, 8182>,
     *     PrivateMetadataPid?: int<32, 8182>,
     *     ProgramNumber?: int<0, 65535>,
     *     PtsOffset?: int<0, 3600>,
     *     PtsOffsetMode?: 'AUTO'|'SECONDS',
     *     Scte35Pid?: int<32, 8182>,
     *     Scte35Source?: 'PASSTHROUGH'|'NONE',
     *     TimedMetadata?: 'PASSTHROUGH'|'NONE',
     *     TimedMetadataPid?: int<32, 8182>,
     *     TransportStreamId?: int<0, 65535>,
     *     VideoPid?: int<32, 8182>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
