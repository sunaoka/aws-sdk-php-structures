<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutionSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $CleanedSteps
 * @property list<CleanupFailure>|null $FailedSteps
 * @property list<string>|null $SkippedSteps
 */
class CleanupStepMetadata extends Shape
{
    /**
     * @param array{
     *     CleanedSteps?: list<string>|null,
     *     FailedSteps?: list<CleanupFailure>|null,
     *     SkippedSteps?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
