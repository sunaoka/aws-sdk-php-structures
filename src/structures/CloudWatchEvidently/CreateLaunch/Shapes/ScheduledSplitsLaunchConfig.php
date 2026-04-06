<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\CreateLaunch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ScheduledSplitConfig> $steps
 */
class ScheduledSplitsLaunchConfig extends Shape
{
    /**
     * @param array{steps: list<ScheduledSplitConfig>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
