<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT_CODEC_DURATION'|'MATCH_VIDEO_DURATION'|null $AudioDuration
 * @property int<0, 2147483647>|null $AudioFramesPerPes
 * @property list<int<32, 8182>>|null $AudioPids
 * @property 'AUTO'|'ALIGN_TO_VIDEO'|null $DataPTSControl
 * @property int<0, 500>|null $MaxPcrInterval
 * @property 'INSERT'|'NONE'|null $NielsenId3
 * @property int<0, 1000>|null $PatInterval
 * @property 'PCR_EVERY_PES_PACKET'|'CONFIGURED_PCR_PERIOD'|null $PcrControl
 * @property int<32, 8182>|null $PcrPid
 * @property int<0, 1000>|null $PmtInterval
 * @property int<32, 8182>|null $PmtPid
 * @property int<32, 8182>|null $PrivateMetadataPid
 * @property int<0, 65535>|null $ProgramNumber
 * @property int<0, 3600>|null $PtsOffset
 * @property 'AUTO'|'SECONDS'|null $PtsOffsetMode
 * @property int<32, 8182>|null $Scte35Pid
 * @property 'PASSTHROUGH'|'NONE'|null $Scte35Source
 * @property 'PASSTHROUGH'|'NONE'|null $TimedMetadata
 * @property int<32, 8182>|null $TimedMetadataPid
 * @property int<0, 65535>|null $TransportStreamId
 * @property int<32, 8182>|null $VideoPid
 */
class M3u8Settings extends Shape
{
    /**
     * @param array{
     *     AudioDuration?: 'DEFAULT_CODEC_DURATION'|'MATCH_VIDEO_DURATION'|null,
     *     AudioFramesPerPes?: int<0, 2147483647>|null,
     *     AudioPids?: list<int<32, 8182>>|null,
     *     DataPTSControl?: 'AUTO'|'ALIGN_TO_VIDEO'|null,
     *     MaxPcrInterval?: int<0, 500>|null,
     *     NielsenId3?: 'INSERT'|'NONE'|null,
     *     PatInterval?: int<0, 1000>|null,
     *     PcrControl?: 'PCR_EVERY_PES_PACKET'|'CONFIGURED_PCR_PERIOD'|null,
     *     PcrPid?: int<32, 8182>|null,
     *     PmtInterval?: int<0, 1000>|null,
     *     PmtPid?: int<32, 8182>|null,
     *     PrivateMetadataPid?: int<32, 8182>|null,
     *     ProgramNumber?: int<0, 65535>|null,
     *     PtsOffset?: int<0, 3600>|null,
     *     PtsOffsetMode?: 'AUTO'|'SECONDS'|null,
     *     Scte35Pid?: int<32, 8182>|null,
     *     Scte35Source?: 'PASSTHROUGH'|'NONE'|null,
     *     TimedMetadata?: 'PASSTHROUGH'|'NONE'|null,
     *     TimedMetadataPid?: int<32, 8182>|null,
     *     TransportStreamId?: int<0, 65535>|null,
     *     VideoPid?: int<32, 8182>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
