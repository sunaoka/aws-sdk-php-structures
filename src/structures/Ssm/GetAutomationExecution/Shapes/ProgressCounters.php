<?php

namespace Sunaoka\Aws\Structures\Ssm\GetAutomationExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TotalSteps
 * @property int $SuccessSteps
 * @property int $FailedSteps
 * @property int $CancelledSteps
 * @property int $TimedOutSteps
 */
class ProgressCounters extends Shape
{
    /**
     * @param array{
     *     TotalSteps?: int,
     *     SuccessSteps?: int,
     *     FailedSteps?: int,
     *     CancelledSteps?: int,
     *     TimedOutSteps?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
