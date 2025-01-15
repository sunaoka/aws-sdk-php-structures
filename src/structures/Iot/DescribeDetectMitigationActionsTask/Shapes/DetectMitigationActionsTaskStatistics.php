<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeDetectMitigationActionsTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $actionsExecuted
 * @property int|null $actionsSkipped
 * @property int|null $actionsFailed
 */
class DetectMitigationActionsTaskStatistics extends Shape
{
    /**
     * @param array{
     *     actionsExecuted?: int|null,
     *     actionsSkipped?: int|null,
     *     actionsFailed?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
