<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OutputLocationRef $Destination
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH'|null $NielsenId3Behavior
 * @property 'NONE'|'SCTE_35_WITHOUT_SEGMENTATION'|null $Scte35Type
 * @property int<1, max>|null $SegmentLength
 * @property 'MILLISECONDS'|'SECONDS'|null $SegmentLengthUnits
 * @property int<0, 2000>|null $SendDelayMs
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
     *     SendDelayMs?: int<0, 2000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
