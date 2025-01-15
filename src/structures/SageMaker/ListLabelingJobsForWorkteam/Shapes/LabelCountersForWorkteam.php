<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListLabelingJobsForWorkteam\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $HumanLabeled
 * @property int<0, max>|null $PendingHuman
 * @property int<0, max>|null $Total
 */
class LabelCountersForWorkteam extends Shape
{
    /**
     * @param array{
     *     HumanLabeled?: int<0, max>|null,
     *     PendingHuman?: int<0, max>|null,
     *     Total?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
