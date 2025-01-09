<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AcquisitionPointId
 * @property 'PASSTHROUGH'|'USE_CONFIGURED_CLOCK' $AudioOnlyTimecodeControl
 * @property 'SELF_SIGNED'|'VERIFY_AUTHENTICITY' $CertificateMode
 * @property int $ConnectionRetryInterval
 * @property OutputLocationRef $Destination
 * @property string $EventId
 * @property 'NO_EVENT_ID'|'USE_CONFIGURED'|'USE_TIMESTAMP' $EventIdMode
 * @property 'NONE'|'SEND_EOS' $EventStopBehavior
 * @property int $FilecacheDuration
 * @property int $FragmentLength
 * @property 'EMIT_OUTPUT'|'PAUSE_OUTPUT' $InputLossAction
 * @property int $NumRetries
 * @property int $RestartDelay
 * @property 'USE_INPUT_SEGMENTATION'|'USE_SEGMENT_DURATION' $SegmentationMode
 * @property int $SendDelayMs
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
     *     ConnectionRetryInterval?: int,
     *     Destination: OutputLocationRef,
     *     EventId?: string,
     *     EventIdMode?: 'NO_EVENT_ID'|'USE_CONFIGURED'|'USE_TIMESTAMP',
     *     EventStopBehavior?: 'NONE'|'SEND_EOS',
     *     FilecacheDuration?: int,
     *     FragmentLength?: int,
     *     InputLossAction?: 'EMIT_OUTPUT'|'PAUSE_OUTPUT',
     *     NumRetries?: int,
     *     RestartDelay?: int,
     *     SegmentationMode?: 'USE_INPUT_SEGMENTATION'|'USE_SEGMENT_DURATION',
     *     SendDelayMs?: int,
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
