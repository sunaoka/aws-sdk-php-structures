<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OutputLocationRef $Destination
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH' $NielsenId3Behavior
 * @property 'NONE'|'SCTE_35_WITHOUT_SEGMENTATION' $Scte35Type
 * @property int<1, max> $SegmentLength
 * @property 'MILLISECONDS'|'SECONDS' $SegmentLengthUnits
 * @property int<0, 2000> $SendDelayMs
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
     *     SegmentLength?: int<1, max>,
     *     SegmentLengthUnits?: 'MILLISECONDS'|'SECONDS',
     *     SendDelayMs?: int<0, 2000>,
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
