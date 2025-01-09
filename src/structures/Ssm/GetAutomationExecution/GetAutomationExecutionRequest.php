<?php

namespace Sunaoka\Aws\Structures\Ssm\GetAutomationExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutomationExecutionId
 */
class GetAutomationExecutionRequest extends Request
{
    /**
     * @param array{AutomationExecutionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
