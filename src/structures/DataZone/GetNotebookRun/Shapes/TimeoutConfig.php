<?php

namespace Sunaoka\Aws\Structures\DataZone\GetNotebookRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<60, 1440>|null $runTimeoutInMinutes
 */
class TimeoutConfig extends Shape
{
    /**
     * @param array{runTimeoutInMinutes?: int<60, 1440>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
