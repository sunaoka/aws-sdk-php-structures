<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PipelinePauseStateSettings> $Pipelines
 */
class PauseStateScheduleActionSettings extends Shape
{
    /**
     * @param array{Pipelines?: list<PipelinePauseStateSettings>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
