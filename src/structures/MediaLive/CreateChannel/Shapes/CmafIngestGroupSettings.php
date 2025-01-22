<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OutputLocationRef $Destination
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH'|null $NielsenId3Behavior
 * @property 'NONE'|'SCTE_35_WITHOUT_SEGMENTATION'|null $Scte35Type
 * @property int<1, max>|null $SegmentLength
 * @property 'MILLISECONDS'|'SECONDS'|null $SegmentLengthUnits
 * @property int<0, 2000>|null $SendDelayMs
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH'|null $KlvBehavior
 * @property string|null $KlvNameModifier
 * @property string|null $NielsenId3NameModifier
 * @property string|null $Scte35NameModifier
 * @property 'DISABLED'|'ENABLED'|null $Id3Behavior
 * @property string|null $Id3NameModifier
 */
class CmafIngestGroupSettings extends Shape
{
    /**
     * @param array{
     *     Destination: OutputLocationRef,
     *     NielsenId3Behavior?: 'NO_PASSTHROUGH'|'PASSTHROUGH'|null,
     *     Scte35Type?: 'NONE'|'SCTE_35_WITHOUT_SEGMENTATION'|null,
     *     SegmentLength?: int<1, max>|null,
     *     SegmentLengthUnits?: 'MILLISECONDS'|'SECONDS'|null,
     *     SendDelayMs?: int<0, 2000>|null,
     *     KlvBehavior?: 'NO_PASSTHROUGH'|'PASSTHROUGH'|null,
     *     KlvNameModifier?: string|null,
     *     NielsenId3NameModifier?: string|null,
     *     Scte35NameModifier?: string|null,
     *     Id3Behavior?: 'DISABLED'|'ENABLED'|null,
     *     Id3NameModifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
