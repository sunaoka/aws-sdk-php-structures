<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OutputLocationRef $Destination
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH' $NielsenId3Behavior
 * @property 'NONE'|'SCTE_35_WITHOUT_SEGMENTATION' $Scte35Type
 * @property int $SegmentLength
 * @property 'MILLISECONDS'|'SECONDS' $SegmentLengthUnits
 * @property int $SendDelayMs
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH' $KlvBehavior
 * @property string $KlvNameModifier
 * @property string $NielsenId3NameModifier
 * @property string $Scte35NameModifier
 */
class CmafIngestGroupSettings extends Shape
{
    /**
     * @param array{
     *     Destination: OutputLocationRef,
     *     NielsenId3Behavior?: 'NO_PASSTHROUGH'|'PASSTHROUGH',
     *     Scte35Type?: 'NONE'|'SCTE_35_WITHOUT_SEGMENTATION',
     *     SegmentLength?: int,
     *     SegmentLengthUnits?: 'MILLISECONDS'|'SECONDS',
     *     SendDelayMs?: int,
     *     KlvBehavior?: 'NO_PASSTHROUGH'|'PASSTHROUGH',
     *     KlvNameModifier?: string,
     *     NielsenId3NameModifier?: string,
     *     Scte35NameModifier?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
