<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AcquisitionPointId
 * @property 'PASSTHROUGH'|'USE_CONFIGURED_CLOCK'|null $AudioOnlyTimecodeControl
 * @property 'SELF_SIGNED'|'VERIFY_AUTHENTICITY'|null $CertificateMode
 * @property int<0, max>|null $ConnectionRetryInterval
 * @property OutputLocationRef $Destination
 * @property string|null $EventId
 * @property 'NO_EVENT_ID'|'USE_CONFIGURED'|'USE_TIMESTAMP'|null $EventIdMode
 * @property 'NONE'|'SEND_EOS'|null $EventStopBehavior
 * @property int<0, max>|null $FilecacheDuration
 * @property int<1, max>|null $FragmentLength
 * @property 'EMIT_OUTPUT'|'PAUSE_OUTPUT'|null $InputLossAction
 * @property int<0, max>|null $NumRetries
 * @property int<0, max>|null $RestartDelay
 * @property 'USE_INPUT_SEGMENTATION'|'USE_SEGMENT_DURATION'|null $SegmentationMode
 * @property int<0, 10000>|null $SendDelayMs
 * @property 'NONE'|'SCTE_35'|'SCTE_35_WITHOUT_SEGMENTATION'|null $SparseTrackType
 * @property 'DO_NOT_SEND'|'SEND'|null $StreamManifestBehavior
 * @property string|null $TimestampOffset
 * @property 'USE_CONFIGURED_OFFSET'|'USE_EVENT_START_DATE'|null $TimestampOffsetMode
 */
class MsSmoothGroupSettings extends Shape
{
    /**
     * @param array{
     *     AcquisitionPointId?: string|null,
     *     AudioOnlyTimecodeControl?: 'PASSTHROUGH'|'USE_CONFIGURED_CLOCK'|null,
     *     CertificateMode?: 'SELF_SIGNED'|'VERIFY_AUTHENTICITY'|null,
     *     ConnectionRetryInterval?: int<0, max>|null,
     *     Destination: OutputLocationRef,
     *     EventId?: string|null,
     *     EventIdMode?: 'NO_EVENT_ID'|'USE_CONFIGURED'|'USE_TIMESTAMP'|null,
     *     EventStopBehavior?: 'NONE'|'SEND_EOS'|null,
     *     FilecacheDuration?: int<0, max>|null,
     *     FragmentLength?: int<1, max>|null,
     *     InputLossAction?: 'EMIT_OUTPUT'|'PAUSE_OUTPUT'|null,
     *     NumRetries?: int<0, max>|null,
     *     RestartDelay?: int<0, max>|null,
     *     SegmentationMode?: 'USE_INPUT_SEGMENTATION'|'USE_SEGMENT_DURATION'|null,
     *     SendDelayMs?: int<0, 10000>|null,
     *     SparseTrackType?: 'NONE'|'SCTE_35'|'SCTE_35_WITHOUT_SEGMENTATION'|null,
     *     StreamManifestBehavior?: 'DO_NOT_SEND'|'SEND'|null,
     *     TimestampOffset?: string|null,
     *     TimestampOffsetMode?: 'USE_CONFIGURED_OFFSET'|'USE_EVENT_START_DATE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
