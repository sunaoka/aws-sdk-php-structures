<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DVB'|'ATSC' $AudioBufferModel
 * @property 'DEFAULT_CODEC_DURATION'|'MATCH_VIDEO_DURATION' $AudioDuration
 * @property int $AudioFramesPerPes
 * @property list<int> $AudioPids
 * @property int $Bitrate
 * @property 'MULTIPLEX'|'NONE' $BufferModel
 * @property 'AUTO'|'ALIGN_TO_VIDEO' $DataPTSControl
 * @property DvbNitSettings $DvbNitSettings
 * @property DvbSdtSettings $DvbSdtSettings
 * @property list<int> $DvbSubPids
 * @property DvbTdtSettings $DvbTdtSettings
 * @property int $DvbTeletextPid
 * @property 'VIDEO_AND_FIXED_INTERVALS'|'VIDEO_INTERVAL' $EbpAudioInterval
 * @property 'VIDEO_AND_AUDIO_PIDS'|'VIDEO_PID' $EbpPlacement
 * @property 'INCLUDE'|'EXCLUDE' $EsRateInPes
 * @property 'FORCE'|'DEFAULT' $ForceTsVideoEbpOrder
 * @property double $FragmentTime
 * @property 'PASSTHROUGH'|'NONE' $KlvMetadata
 * @property int $MaxPcrInterval
 * @property int $MinEbpInterval
 * @property 'INSERT'|'NONE' $NielsenId3
 * @property double $NullPacketBitrate
 * @property int $PatInterval
 * @property 'PCR_EVERY_PES_PACKET'|'CONFIGURED_PCR_PERIOD' $PcrControl
 * @property int $PcrPid
 * @property int $PmtInterval
 * @property int $PmtPid
 * @property 'DISABLED'|'ENABLED' $PreventBufferUnderflow
 * @property int $PrivateMetadataPid
 * @property int $ProgramNumber
 * @property int $PtsOffset
 * @property 'AUTO'|'SECONDS' $PtsOffsetMode
 * @property 'VBR'|'CBR' $RateMode
 * @property M2tsScte35Esam $Scte35Esam
 * @property int $Scte35Pid
 * @property 'PASSTHROUGH'|'NONE' $Scte35Source
 * @property 'NONE'|'RAI_SEGSTART'|'RAI_ADAPT'|'PSI_SEGSTART'|'EBP'|'EBP_LEGACY' $SegmentationMarkers
 * @property 'MAINTAIN_CADENCE'|'RESET_CADENCE' $SegmentationStyle
 * @property double $SegmentationTime
 * @property int $TimedMetadataPid
 * @property int $TransportStreamId
 * @property int $VideoPid
 */
class M2tsSettings extends Shape
{
    /**
     * @param array{
     *     AudioBufferModel?: 'DVB'|'ATSC',
     *     AudioDuration?: 'DEFAULT_CODEC_DURATION'|'MATCH_VIDEO_DURATION',
     *     AudioFramesPerPes?: int,
     *     AudioPids?: list<int>,
     *     Bitrate?: int,
     *     BufferModel?: 'MULTIPLEX'|'NONE',
     *     DataPTSControl?: 'AUTO'|'ALIGN_TO_VIDEO',
     *     DvbNitSettings?: DvbNitSettings,
     *     DvbSdtSettings?: DvbSdtSettings,
     *     DvbSubPids?: list<int>,
     *     DvbTdtSettings?: DvbTdtSettings,
     *     DvbTeletextPid?: int,
     *     EbpAudioInterval?: 'VIDEO_AND_FIXED_INTERVALS'|'VIDEO_INTERVAL',
     *     EbpPlacement?: 'VIDEO_AND_AUDIO_PIDS'|'VIDEO_PID',
     *     EsRateInPes?: 'INCLUDE'|'EXCLUDE',
     *     ForceTsVideoEbpOrder?: 'FORCE'|'DEFAULT',
     *     FragmentTime?: double,
     *     KlvMetadata?: 'PASSTHROUGH'|'NONE',
     *     MaxPcrInterval?: int,
     *     MinEbpInterval?: int,
     *     NielsenId3?: 'INSERT'|'NONE',
     *     NullPacketBitrate?: double,
     *     PatInterval?: int,
     *     PcrControl?: 'PCR_EVERY_PES_PACKET'|'CONFIGURED_PCR_PERIOD',
     *     PcrPid?: int,
     *     PmtInterval?: int,
     *     PmtPid?: int,
     *     PreventBufferUnderflow?: 'DISABLED'|'ENABLED',
     *     PrivateMetadataPid?: int,
     *     ProgramNumber?: int,
     *     PtsOffset?: int,
     *     PtsOffsetMode?: 'AUTO'|'SECONDS',
     *     RateMode?: 'VBR'|'CBR',
     *     Scte35Esam?: M2tsScte35Esam,
     *     Scte35Pid?: int,
     *     Scte35Source?: 'PASSTHROUGH'|'NONE',
     *     SegmentationMarkers?: 'NONE'|'RAI_SEGSTART'|'RAI_ADAPT'|'PSI_SEGSTART'|'EBP'|'EBP_LEGACY',
     *     SegmentationStyle?: 'MAINTAIN_CADENCE'|'RESET_CADENCE',
     *     SegmentationTime?: double,
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
