<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StartTime
 * @property string|null $EndTime
 */
class OpenHoursRule extends Shape
{
    /**
     * @param array{
     *     StartTime?: string|null,
     *     EndTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
