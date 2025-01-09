<?php

namespace Sunaoka\Aws\Structures\Ssm\StopAutomationExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutomationExecutionId
 * @property 'Complete'|'Cancel' $Type
 */
class StopAutomationExecutionRequest extends Request
{
    /**
     * @param array{
     *     AutomationExecutionId: string,
     *     Type?: 'Complete'|'Cancel'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
