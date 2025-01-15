<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\ListDetectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $stateName
 */
class DetectorStateSummary extends Shape
{
    /**
     * @param array{stateName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
