<?php

namespace Sunaoka\Aws\Structures\Ssm\GetAutomationExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $TotalSteps
 * @property int|null $SuccessSteps
 * @property int|null $FailedSteps
 * @property int|null $CancelledSteps
 * @property int|null $TimedOutSteps
 */
class ProgressCounters extends Shape
{
    /**
     * @param array{
     *     TotalSteps?: int|null,
     *     SuccessSteps?: int|null,
     *     FailedSteps?: int|null,
     *     CancelledSteps?: int|null,
     *     TimedOutSteps?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
