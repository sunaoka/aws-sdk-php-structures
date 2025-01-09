<?php

namespace Sunaoka\Aws\Structures\Athena\GetCalculationExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CalculationExecutionId
 */
class GetCalculationExecutionRequest extends Request
{
    /**
     * @param array{CalculationExecutionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
