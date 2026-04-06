<?php

namespace Sunaoka\Aws\Structures\Odb\CreateCloudAutonomousVmCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY'|null $name
 */
class DayOfWeek extends Shape
{
    /**
     * @param array{name?: 'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
