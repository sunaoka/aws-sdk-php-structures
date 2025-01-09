<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListLabelingJobsForWorkteam\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $HumanLabeled
 * @property int $PendingHuman
 * @property int $Total
 */
class LabelCountersForWorkteam extends Shape
{
    /**
     * @param array{
     *     HumanLabeled?: int,
     *     PendingHuman?: int,
     *     Total?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
