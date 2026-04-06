<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DVB'|'ATSC'|null $AudioBufferModel
 * @property 'DEFAULT_CODEC_DURATION'|'MATCH_VIDEO_DURATION'|null $AudioDuration
 * @property int<0, 2147483647>|null $AudioFramesPerPes
 * @property list<int<32, 8182>>|null $AudioPids
 * @property int<-10000, 10000>|null $AudioPtsOffsetDelta
 * @property int<0, 2147483647>|null $Bitrate
 * @property 'MULTIPLEX'|'NONE'|null $BufferModel
 * @property 'AUTO'|'ALIGN_TO_VIDEO'|null $DataPTSControl
 * @property DvbNitSettings|null $DvbNitSettings
 * @property DvbSdtSettings|null $DvbSdtSettings
 * @property list<int<32, 8182>>|null $DvbSubPids
 * @property DvbTdtSettings|null $DvbTdtSettings
 * @property int<32, 8182>|null $DvbTeletextPid
 * @property 'VIDEO_AND_FIXED_INTERVALS'|'VIDEO_INTERVAL'|null $EbpAudioInterval
 * @property 'VIDEO_AND_AUDIO_PIDS'|'VIDEO_PID'|null $EbpPlacement
 * @property 'INCLUDE'|'EXCLUDE'|null $EsRateInPes
 * @property 'FORCE'|'DEFAULT'|null $ForceTsVideoEbpOrder
 * @property double|null $FragmentTime
 * @property 'PASSTHROUGH'|'NONE'|null $KlvMetadata
 * @property int<0, 500>|null $MaxPcrInterval
 * @property int<0, 10000>|null $MinEbpInterval
 * @property 'INSERT'|'NONE'|null $NielsenId3
 * @property double|null $NullPacketBitrate
 * @property int<0, 1000>|null $PatInterval
 * @property 'PCR_EVERY_PES_PACKET'|'CONFIGURED_PCR_PERIOD'|null $PcrControl
 * @property int<32, 8182>|null $PcrPid
 * @property int<0, 1000>|null $PmtInterval
 * @property int<32, 8182>|null $PmtPid
 * @property 'DISABLED'|'ENABLED'|null $PreventBufferUnderflow
 * @property int<32, 8182>|null $PrivateMetadataPid
 * @property int<0, 65535>|null $ProgramNumber
 * @property int<0, 3600>|null $PtsOffset
 * @property 'AUTO'|'SECONDS'|'MILLISECONDS'|null $PtsOffsetMode
 * @property 'VBR'|'CBR'|null $RateMode
 * @property M2tsScte35Esam|null $Scte35Esam
 * @property int<32, 8182>|null $Scte35Pid
 * @property 'PASSTHROUGH'|'NONE'|null $Scte35Source
 * @property 'NONE'|'RAI_SEGSTART'|'RAI_ADAPT'|'PSI_SEGSTART'|'EBP'|'EBP_LEGACY'|null $SegmentationMarkers
 * @property 'MAINTAIN_CADENCE'|'RESET_CADENCE'|null $SegmentationStyle
 * @property double|null $SegmentationTime
 * @property int<32, 8182>|null $TimedMetadataPid
 * @property int<0, 65535>|null $TransportStreamId
 * @property int<32, 8182>|null $VideoPid
 */
class M2tsSettings extends Shape
{
    /**
     * @param array{
     *     AudioBufferModel?: 'DVB'|'ATSC'|null,
     *     AudioDuration?: 'DEFAULT_CODEC_DURATION'|'MATCH_VIDEO_DURATION'|null,
     *     AudioFramesPerPes?: int<0, 2147483647>|null,
     *     AudioPids?: list<int<32, 8182>>|null,
     *     AudioPtsOffsetDelta?: int<-10000, 10000>|null,
     *     Bitrate?: int<0, 2147483647>|null,
     *     BufferModel?: 'MULTIPLEX'|'NONE'|null,
     *     DataPTSControl?: 'AUTO'|'ALIGN_TO_VIDEO'|null,
     *     DvbNitSettings?: DvbNitSettings|null,
     *     DvbSdtSettings?: DvbSdtSettings|null,
     *     DvbSubPids?: list<int<32, 8182>>|null,
     *     DvbTdtSettings?: DvbTdtSettings|null,
     *     DvbTeletextPid?: int<32, 8182>|null,
     *     EbpAudioInterval?: 'VIDEO_AND_FIXED_INTERVALS'|'VIDEO_INTERVAL'|null,
     *     EbpPlacement?: 'VIDEO_AND_AUDIO_PIDS'|'VIDEO_PID'|null,
     *     EsRateInPes?: 'INCLUDE'|'EXCLUDE'|null,
     *     ForceTsVideoEbpOrder?: 'FORCE'|'DEFAULT'|null,
     *     FragmentTime?: double|null,
     *     KlvMetadata?: 'PASSTHROUGH'|'NONE'|null,
     *     MaxPcrInterval?: int<0, 500>|null,
     *     MinEbpInterval?: int<0, 10000>|null,
     *     NielsenId3?: 'INSERT'|'NONE'|null,
     *     NullPacketBitrate?: double|null,
     *     PatInterval?: int<0, 1000>|null,
     *     PcrControl?: 'PCR_EVERY_PES_PACKET'|'CONFIGURED_PCR_PERIOD'|null,
     *     PcrPid?: int<32, 8182>|null,
     *     PmtInterval?: int<0, 1000>|null,
     *     PmtPid?: int<32, 8182>|null,
     *     PreventBufferUnderflow?: 'DISABLED'|'ENABLED'|null,
     *     PrivateMetadataPid?: int<32, 8182>|null,
     *     ProgramNumber?: int<0, 65535>|null,
     *     PtsOffset?: int<0, 3600>|null,
     *     PtsOffsetMode?: 'AUTO'|'SECONDS'|'MILLISECONDS'|null,
     *     RateMode?: 'VBR'|'CBR'|null,
     *     Scte35Esam?: M2tsScte35Esam|null,
     *     Scte35Pid?: int<32, 8182>|null,
     *     Scte35Source?: 'PASSTHROUGH'|'NONE'|null,
     *     SegmentationMarkers?: 'NONE'|'RAI_SEGSTART'|'RAI_ADAPT'|'PSI_SEGSTART'|'EBP'|'EBP_LEGACY'|null,
     *     SegmentationStyle?: 'MAINTAIN_CADENCE'|'RESET_CADENCE'|null,
     *     SegmentationTime?: double|null,
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
