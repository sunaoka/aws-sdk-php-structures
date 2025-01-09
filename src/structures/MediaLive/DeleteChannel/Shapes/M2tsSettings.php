<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DROP'|'ENCODE_SILENCE' $AbsentInputAudioBehavior
 * @property 'DISABLED'|'ENABLED' $Arib
 * @property string $AribCaptionsPid
 * @property 'AUTO'|'USE_CONFIGURED' $AribCaptionsPidControl
 * @property 'ATSC'|'DVB' $AudioBufferModel
 * @property int $AudioFramesPerPes
 * @property string $AudioPids
 * @property 'ATSC'|'DVB' $AudioStreamType
 * @property int $Bitrate
 * @property 'MULTIPLEX'|'NONE' $BufferModel
 * @property 'DISABLED'|'ENABLED' $CcDescriptor
 * @property DvbNitSettings $DvbNitSettings
 * @property DvbSdtSettings $DvbSdtSettings
 * @property string $DvbSubPids
 * @property DvbTdtSettings $DvbTdtSettings
 * @property string $DvbTeletextPid
 * @property 'NONE'|'PASSTHROUGH' $Ebif
 * @property 'VIDEO_AND_FIXED_INTERVALS'|'VIDEO_INTERVAL' $EbpAudioInterval
 * @property int $EbpLookaheadMs
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
 * @property int $PatInterval
 * @property 'CONFIGURED_PCR_PERIOD'|'PCR_EVERY_PES_PACKET' $PcrControl
 * @property int $PcrPeriod
 * @property string $PcrPid
 * @property int $PmtInterval
 * @property string $PmtPid
 * @property int $ProgramNum
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
 * @property int $TransportStreamId
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
     *     AudioFramesPerPes?: int,
     *     AudioPids?: string,
     *     AudioStreamType?: 'ATSC'|'DVB',
     *     Bitrate?: int,
     *     BufferModel?: 'MULTIPLEX'|'NONE',
     *     CcDescriptor?: 'DISABLED'|'ENABLED',
     *     DvbNitSettings?: DvbNitSettings,
     *     DvbSdtSettings?: DvbSdtSettings,
     *     DvbSubPids?: string,
     *     DvbTdtSettings?: DvbTdtSettings,
     *     DvbTeletextPid?: string,
     *     Ebif?: 'NONE'|'PASSTHROUGH',
     *     EbpAudioInterval?: 'VIDEO_AND_FIXED_INTERVALS'|'VIDEO_INTERVAL',
     *     EbpLookaheadMs?: int,
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
     *     PatInterval?: int,
     *     PcrControl?: 'CONFIGURED_PCR_PERIOD'|'PCR_EVERY_PES_PACKET',
     *     PcrPeriod?: int,
     *     PcrPid?: string,
     *     PmtInterval?: int,
     *     PmtPid?: string,
     *     ProgramNum?: int,
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
     *     TransportStreamId?: int,
     *     VideoPid?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
