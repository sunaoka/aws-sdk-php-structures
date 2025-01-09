<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListLabelingJobsForWorkteam\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $HumanLabeled
 * @property int<0, max> $PendingHuman
 * @property int<0, max> $Total
 */
class LabelCountersForWorkteam extends Shape
{
    /**
     * @param array{
     *     HumanLabeled?: int<0, max>,
     *     PendingHuman?: int<0, max>,
     *     Total?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
