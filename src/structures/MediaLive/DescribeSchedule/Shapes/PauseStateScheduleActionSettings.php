<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PipelinePauseStateSettings>|null $Pipelines
 */
class PauseStateScheduleActionSettings extends Shape
{
    /**
     * @param array{Pipelines?: list<PipelinePauseStateSettings>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
