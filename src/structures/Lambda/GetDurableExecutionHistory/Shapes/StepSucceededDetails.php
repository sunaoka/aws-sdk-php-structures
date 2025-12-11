<?php

namespace Sunaoka\Aws\Structures\Lambda\GetDurableExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EventResult $Result
 * @property RetryDetails $RetryDetails
 */
class StepSucceededDetails extends Shape
{
    /**
     * @param array{
     *     Result: EventResult,
     *     RetryDetails: RetryDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
