<?php

namespace Sunaoka\Aws\Structures\Athena\StopCalculationExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CalculationExecutionId
 */
class StopCalculationExecutionRequest extends Request
{
    /**
     * @param array{CalculationExecutionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
