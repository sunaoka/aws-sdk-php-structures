<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\UpdateStage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<2, 10>|null $targetSegmentDurationSeconds
 */
class ParticipantRecordingHlsConfiguration extends Shape
{
    /**
     * @param array{targetSegmentDurationSeconds?: int<2, 10>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
