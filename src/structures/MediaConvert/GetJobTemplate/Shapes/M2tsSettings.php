<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DVB'|'ATSC' $AudioBufferModel
 * @property 'DEFAULT_CODEC_DURATION'|'MATCH_VIDEO_DURATION' $AudioDuration
 * @property int<0, 2147483647> $AudioFramesPerPes
 * @property list<int<32, 8182>> $AudioPids
 * @property int<0, 2147483647> $Bitrate
 * @property 'MULTIPLEX'|'NONE' $BufferModel
 * @property 'AUTO'|'ALIGN_TO_VIDEO' $DataPTSControl
 * @property DvbNitSettings $DvbNitSettings
 * @property DvbSdtSettings $DvbSdtSettings
 * @property list<int<32, 8182>> $DvbSubPids
 * @property DvbTdtSettings $DvbTdtSettings
 * @property int<32, 8182> $DvbTeletextPid
 * @property 'VIDEO_AND_FIXED_INTERVALS'|'VIDEO_INTERVAL' $EbpAudioInterval
 * @property 'VIDEO_AND_AUDIO_PIDS'|'VIDEO_PID' $EbpPlacement
 * @property 'INCLUDE'|'EXCLUDE' $EsRateInPes
 * @property 'FORCE'|'DEFAULT' $ForceTsVideoEbpOrder
 * @property double $FragmentTime
 * @property 'PASSTHROUGH'|'NONE' $KlvMetadata
 * @property int<0, 500> $MaxPcrInterval
 * @property int<0, 10000> $MinEbpInterval
 * @property 'INSERT'|'NONE' $NielsenId3
 * @property double $NullPacketBitrate
 * @property int<0, 1000> $PatInterval
 * @property 'PCR_EVERY_PES_PACKET'|'CONFIGURED_PCR_PERIOD' $PcrControl
 * @property int<32, 8182> $PcrPid
 * @property int<0, 1000> $PmtInterval
 * @property int<32, 8182> $PmtPid
 * @property 'DISABLED'|'ENABLED' $PreventBufferUnderflow
 * @property int<32, 8182> $PrivateMetadataPid
 * @property int<0, 65535> $ProgramNumber
 * @property int<0, 3600> $PtsOffset
 * @property 'AUTO'|'SECONDS' $PtsOffsetMode
 * @property 'VBR'|'CBR' $RateMode
 * @property M2tsScte35Esam $Scte35Esam
 * @property int<32, 8182> $Scte35Pid
 * @property 'PASSTHROUGH'|'NONE' $Scte35Source
 * @property 'NONE'|'RAI_SEGSTART'|'RAI_ADAPT'|'PSI_SEGSTART'|'EBP'|'EBP_LEGACY' $SegmentationMarkers
 * @property 'MAINTAIN_CADENCE'|'RESET_CADENCE' $SegmentationStyle
 * @property double $SegmentationTime
 * @property int<32, 8182> $TimedMetadataPid
 * @property int<0, 65535> $TransportStreamId
 * @property int<32, 8182> $VideoPid
 */
class M2tsSettings extends Shape
{
    /**
     * @param array{
     *     AudioBufferModel?: 'DVB'|'ATSC',
     *     AudioDuration?: 'DEFAULT_CODEC_DURATION'|'MATCH_VIDEO_DURATION',
     *     AudioFramesPerPes?: int<0, 2147483647>,
     *     AudioPids?: list<int<32, 8182>>,
     *     Bitrate?: int<0, 2147483647>,
     *     BufferModel?: 'MULTIPLEX'|'NONE',
     *     DataPTSControl?: 'AUTO'|'ALIGN_TO_VIDEO',
     *     DvbNitSettings?: DvbNitSettings,
     *     DvbSdtSettings?: DvbSdtSettings,
     *     DvbSubPids?: list<int<32, 8182>>,
     *     DvbTdtSettings?: DvbTdtSettings,
     *     DvbTeletextPid?: int<32, 8182>,
     *     EbpAudioInterval?: 'VIDEO_AND_FIXED_INTERVALS'|'VIDEO_INTERVAL',
     *     EbpPlacement?: 'VIDEO_AND_AUDIO_PIDS'|'VIDEO_PID',
     *     EsRateInPes?: 'INCLUDE'|'EXCLUDE',
     *     ForceTsVideoEbpOrder?: 'FORCE'|'DEFAULT',
     *     FragmentTime?: double,
     *     KlvMetadata?: 'PASSTHROUGH'|'NONE',
     *     MaxPcrInterval?: int<0, 500>,
     *     MinEbpInterval?: int<0, 10000>,
     *     NielsenId3?: 'INSERT'|'NONE',
     *     NullPacketBitrate?: double,
     *     PatInterval?: int<0, 1000>,
     *     PcrControl?: 'PCR_EVERY_PES_PACKET'|'CONFIGURED_PCR_PERIOD',
     *     PcrPid?: int<32, 8182>,
     *     PmtInterval?: int<0, 1000>,
     *     PmtPid?: int<32, 8182>,
     *     PreventBufferUnderflow?: 'DISABLED'|'ENABLED',
     *     PrivateMetadataPid?: int<32, 8182>,
     *     ProgramNumber?: int<0, 65535>,
     *     PtsOffset?: int<0, 3600>,
     *     PtsOffsetMode?: 'AUTO'|'SECONDS',
     *     RateMode?: 'VBR'|'CBR',
     *     Scte35Esam?: M2tsScte35Esam,
     *     Scte35Pid?: int<32, 8182>,
     *     Scte35Source?: 'PASSTHROUGH'|'NONE',
     *     SegmentationMarkers?: 'NONE'|'RAI_SEGSTART'|'RAI_ADAPT'|'PSI_SEGSTART'|'EBP'|'EBP_LEGACY',
     *     SegmentationStyle?: 'MAINTAIN_CADENCE'|'RESET_CADENCE',
     *     SegmentationTime?: double,
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
