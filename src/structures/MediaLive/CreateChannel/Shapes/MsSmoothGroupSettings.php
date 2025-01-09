<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AcquisitionPointId
 * @property 'PASSTHROUGH'|'USE_CONFIGURED_CLOCK' $AudioOnlyTimecodeControl
 * @property 'SELF_SIGNED'|'VERIFY_AUTHENTICITY' $CertificateMode
 * @property int<0, max> $ConnectionRetryInterval
 * @property OutputLocationRef $Destination
 * @property string $EventId
 * @property 'NO_EVENT_ID'|'USE_CONFIGURED'|'USE_TIMESTAMP' $EventIdMode
 * @property 'NONE'|'SEND_EOS' $EventStopBehavior
 * @property int<0, max> $FilecacheDuration
 * @property int<1, max> $FragmentLength
 * @property 'EMIT_OUTPUT'|'PAUSE_OUTPUT' $InputLossAction
 * @property int<0, max> $NumRetries
 * @property int<0, max> $RestartDelay
 * @property 'USE_INPUT_SEGMENTATION'|'USE_SEGMENT_DURATION' $SegmentationMode
 * @property int<0, 10000> $SendDelayMs
 * @property 'NONE'|'SCTE_35'|'SCTE_35_WITHOUT_SEGMENTATION' $SparseTrackType
 * @property 'DO_NOT_SEND'|'SEND' $StreamManifestBehavior
 * @property string $TimestampOffset
 * @property 'USE_CONFIGURED_OFFSET'|'USE_EVENT_START_DATE' $TimestampOffsetMode
 */
class MsSmoothGroupSettings extends Shape
{
    /**
     * @param array{
     *     AcquisitionPointId?: string,
     *     AudioOnlyTimecodeControl?: 'PASSTHROUGH'|'USE_CONFIGURED_CLOCK',
     *     CertificateMode?: 'SELF_SIGNED'|'VERIFY_AUTHENTICITY',
     *     ConnectionRetryInterval?: int<0, max>,
     *     Destination: OutputLocationRef,
     *     EventId?: string,
     *     EventIdMode?: 'NO_EVENT_ID'|'USE_CONFIGURED'|'USE_TIMESTAMP',
     *     EventStopBehavior?: 'NONE'|'SEND_EOS',
     *     FilecacheDuration?: int<0, max>,
     *     FragmentLength?: int<1, max>,
     *     InputLossAction?: 'EMIT_OUTPUT'|'PAUSE_OUTPUT',
     *     NumRetries?: int<0, max>,
     *     RestartDelay?: int<0, max>,
     *     SegmentationMode?: 'USE_INPUT_SEGMENTATION'|'USE_SEGMENT_DURATION',
     *     SendDelayMs?: int<0, 10000>,
     *     SparseTrackType?: 'NONE'|'SCTE_35'|'SCTE_35_WITHOUT_SEGMENTATION',
     *     StreamManifestBehavior?: 'DO_NOT_SEND'|'SEND',
     *     TimestampOffset?: string,
     *     TimestampOffsetMode?: 'USE_CONFIGURED_OFFSET'|'USE_EVENT_START_DATE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
