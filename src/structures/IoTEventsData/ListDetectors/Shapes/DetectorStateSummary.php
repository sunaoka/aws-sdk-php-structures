<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\ListDetectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $stateName
 */
class DetectorStateSummary extends Shape
{
    /**
     * @param array{stateName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
