<?php

namespace Sunaoka\Aws\Structures\Lambda\GetDurableExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EventError $Error
 * @property RetryDetails $RetryDetails
 */
class StepFailedDetails extends Shape
{
    /**
     * @param array{
     *     Error: EventError,
     *     RetryDetails: RetryDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
