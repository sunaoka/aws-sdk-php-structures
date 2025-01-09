<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DROP'|'ENCODE_SILENCE' $AbsentInputAudioBehavior
 * @property 'DISABLED'|'ENABLED' $Arib
 * @property string $AribCaptionsPid
 * @property 'AUTO'|'USE_CONFIGURED' $AribCaptionsPidControl
 * @property 'ATSC'|'DVB' $AudioBufferModel
 * @property int<0, max> $AudioFramesPerPes
 * @property string $AudioPids
 * @property 'ATSC'|'DVB' $AudioStreamType
 * @property int<0, max> $Bitrate
 * @property 'MULTIPLEX'|'NONE' $BufferModel
 * @property 'DISABLED'|'ENABLED' $CcDescriptor
 * @property DvbNitSettings $DvbNitSettings
 * @property DvbSdtSettings $DvbSdtSettings
 * @property string $DvbSubPids
 * @property DvbTdtSettings $DvbTdtSettings
 * @property string $DvbTeletextPid
 * @property 'NONE'|'PASSTHROUGH' $Ebif
 * @property 'VIDEO_AND_FIXED_INTERVALS'|'VIDEO_INTERVAL' $EbpAudioInterval
 * @property int<0, 10000> $EbpLookaheadMs
 * @property 'VIDEO_AND_AUDIO_PIDS'|'VIDEO_PID' $EbpPlacement
 * @property string $EcmPid
 * @property 'EXCLUDE'|'INCLUDE' $EsRateInPes
 * @property string $EtvPlatformPid
 * @property string $EtvSignalPid
 * @property double $FragmentTime
 * @property 'NONE'|'PASSTHROUGH' $Klv
 * @property string $KlvDataPids
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH' $NielsenId3Behavior
 * @property double $NullPacketBitrate
 * @property int<0, 1000> $PatInterval
 * @property 'CONFIGURED_PCR_PERIOD'|'PCR_EVERY_PES_PACKET' $PcrControl
 * @property int<0, 500> $PcrPeriod
 * @property string $PcrPid
 * @property int<0, 1000> $PmtInterval
 * @property string $PmtPid
 * @property int<0, 65535> $ProgramNum
 * @property 'CBR'|'VBR' $RateMode
 * @property string $Scte27Pids
 * @property 'NONE'|'PASSTHROUGH' $Scte35Control
 * @property string $Scte35Pid
 * @property double $Scte35PrerollPullupMilliseconds
 * @property 'EBP'|'EBP_LEGACY'|'NONE'|'PSI_SEGSTART'|'RAI_ADAPT'|'RAI_SEGSTART' $SegmentationMarkers
 * @property 'MAINTAIN_CADENCE'|'RESET_CADENCE' $SegmentationStyle
 * @property double $SegmentationTime
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH' $TimedMetadataBehavior
 * @property string $TimedMetadataPid
 * @property int<0, 65535> $TransportStreamId
 * @property string $VideoPid
 */
class M2tsSettings extends Shape
{
    /**
     * @param array{
     *     AbsentInputAudioBehavior?: 'DROP'|'ENCODE_SILENCE',
     *     Arib?: 'DISABLED'|'ENABLED',
     *     AribCaptionsPid?: string,
     *     AribCaptionsPidControl?: 'AUTO'|'USE_CONFIGURED',
     *     AudioBufferModel?: 'ATSC'|'DVB',
     *     AudioFramesPerPes?: int<0, max>,
     *     AudioPids?: string,
     *     AudioStreamType?: 'ATSC'|'DVB',
     *     Bitrate?: int<0, max>,
     *     BufferModel?: 'MULTIPLEX'|'NONE',
     *     CcDescriptor?: 'DISABLED'|'ENABLED',
     *     DvbNitSettings?: DvbNitSettings,
     *     DvbSdtSettings?: DvbSdtSettings,
     *     DvbSubPids?: string,
     *     DvbTdtSettings?: DvbTdtSettings,
     *     DvbTeletextPid?: string,
     *     Ebif?: 'NONE'|'PASSTHROUGH',
     *     EbpAudioInterval?: 'VIDEO_AND_FIXED_INTERVALS'|'VIDEO_INTERVAL',
     *     EbpLookaheadMs?: int<0, 10000>,
     *     EbpPlacement?: 'VIDEO_AND_AUDIO_PIDS'|'VIDEO_PID',
     *     EcmPid?: string,
     *     EsRateInPes?: 'EXCLUDE'|'INCLUDE',
     *     EtvPlatformPid?: string,
     *     EtvSignalPid?: string,
     *     FragmentTime?: double,
     *     Klv?: 'NONE'|'PASSTHROUGH',
     *     KlvDataPids?: string,
     *     NielsenId3Behavior?: 'NO_PASSTHROUGH'|'PASSTHROUGH',
     *     NullPacketBitrate?: double,
     *     PatInterval?: int<0, 1000>,
     *     PcrControl?: 'CONFIGURED_PCR_PERIOD'|'PCR_EVERY_PES_PACKET',
     *     PcrPeriod?: int<0, 500>,
     *     PcrPid?: string,
     *     PmtInterval?: int<0, 1000>,
     *     PmtPid?: string,
     *     ProgramNum?: int<0, 65535>,
     *     RateMode?: 'CBR'|'VBR',
     *     Scte27Pids?: string,
     *     Scte35Control?: 'NONE'|'PASSTHROUGH',
     *     Scte35Pid?: string,
     *     Scte35PrerollPullupMilliseconds?: double,
     *     SegmentationMarkers?: 'EBP'|'EBP_LEGACY'|'NONE'|'PSI_SEGSTART'|'RAI_ADAPT'|'RAI_SEGSTART',
     *     SegmentationStyle?: 'MAINTAIN_CADENCE'|'RESET_CADENCE',
     *     SegmentationTime?: double,
     *     TimedMetadataBehavior?: 'NO_PASSTHROUGH'|'PASSTHROUGH',
     *     TimedMetadataPid?: string,
     *     TransportStreamId?: int<0, 65535>,
     *     VideoPid?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
