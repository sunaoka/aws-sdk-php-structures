<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetComposition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<2, 10>|null $targetSegmentDurationSeconds
 */
class CompositionRecordingHlsConfiguration extends Shape
{
    /**
     * @param array{targetSegmentDurationSeconds?: int<2, 10>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
