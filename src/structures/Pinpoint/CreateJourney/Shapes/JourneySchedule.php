<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property string|null $Timezone
 */
class JourneySchedule extends Shape
{
    /**
     * @param array{
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     Timezone?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
