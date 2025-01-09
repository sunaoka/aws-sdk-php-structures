<?php

namespace Sunaoka\Aws\Structures\Iot\ListDetectMitigationActionsTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $actionsExecuted
 * @property int $actionsSkipped
 * @property int $actionsFailed
 */
class DetectMitigationActionsTaskStatistics extends Shape
{
    /**
     * @param array{
     *     actionsExecuted?: int,
     *     actionsSkipped?: int,
     *     actionsFailed?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
