<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\GetLaunch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ScheduledSplit> $steps
 */
class ScheduledSplitsLaunchDefinition extends Shape
{
    /**
     * @param array{steps?: list<ScheduledSplit>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
