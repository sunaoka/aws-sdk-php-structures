<?php

namespace Sunaoka\Aws\Structures\Ssm\GetAutomationExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $TotalCount
 * @property int|null $StartedCount
 * @property int|null $CompletedCount
 * @property int|null $SuccessfulCount
 * @property int|null $FailedCount
 */
class TargetsSummary extends Shape
{
    /**
     * @param array{
     *     TotalCount?: int|null,
     *     StartedCount?: int|null,
     *     CompletedCount?: int|null,
     *     SuccessfulCount?: int|null,
     *     FailedCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
