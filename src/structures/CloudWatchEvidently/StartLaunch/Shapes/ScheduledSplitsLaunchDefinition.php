<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\StartLaunch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ScheduledSplit>|null $steps
 */
class ScheduledSplitsLaunchDefinition extends Shape
{
    /**
     * @param array{steps?: list<ScheduledSplit>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
