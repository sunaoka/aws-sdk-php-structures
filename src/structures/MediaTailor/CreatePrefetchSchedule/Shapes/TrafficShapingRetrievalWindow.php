<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreatePrefetchSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $RetrievalWindowDurationSeconds
 */
class TrafficShapingRetrievalWindow extends Shape
{
    /**
     * @param array{RetrievalWindowDurationSeconds?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
