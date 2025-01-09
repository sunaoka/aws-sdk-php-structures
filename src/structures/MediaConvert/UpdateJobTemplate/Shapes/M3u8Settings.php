<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT_CODEC_DURATION'|'MATCH_VIDEO_DURATION' $AudioDuration
 * @property int $AudioFramesPerPes
 * @property list<int> $AudioPids
 * @property 'AUTO'|'ALIGN_TO_VIDEO' $DataPTSControl
 * @property int $MaxPcrInterval
 * @property 'INSERT'|'NONE' $NielsenId3
 * @property int $PatInterval
 * @property 'PCR_EVERY_PES_PACKET'|'CONFIGURED_PCR_PERIOD' $PcrControl
 * @property int $PcrPid
 * @property int $PmtInterval
 * @property int $PmtPid
 * @property int $PrivateMetadataPid
 * @property int $ProgramNumber
 * @property int $PtsOffset
 * @property 'AUTO'|'SECONDS' $PtsOffsetMode
 * @property int $Scte35Pid
 * @property 'PASSTHROUGH'|'NONE' $Scte35Source
 * @property 'PASSTHROUGH'|'NONE' $TimedMetadata
 * @property int $TimedMetadataPid
 * @property int $TransportStreamId
 * @property int $VideoPid
 */
class M3u8Settings extends Shape
{
    /**
     * @param array{
     *     AudioDuration?: 'DEFAULT_CODEC_DURATION'|'MATCH_VIDEO_DURATION',
     *     AudioFramesPerPes?: int,
     *     AudioPids?: list<int>,
     *     DataPTSControl?: 'AUTO'|'ALIGN_TO_VIDEO',
     *     MaxPcrInterval?: int,
     *     NielsenId3?: 'INSERT'|'NONE',
     *     PatInterval?: int,
     *     PcrControl?: 'PCR_EVERY_PES_PACKET'|'CONFIGURED_PCR_PERIOD',
     *     PcrPid?: int,
     *     PmtInterval?: int,
     *     PmtPid?: int,
     *     PrivateMetadataPid?: int,
     *     ProgramNumber?: int,
     *     PtsOffset?: int,
     *     PtsOffsetMode?: 'AUTO'|'SECONDS',
     *     Scte35Pid?: int,
     *     Scte35Source?: 'PASSTHROUGH'|'NONE',
     *     TimedMetadata?: 'PASSTHROUGH'|'NONE',
     *     TimedMetadataPid?: int,
     *     TransportStreamId?: int,
     *     VideoPid?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
