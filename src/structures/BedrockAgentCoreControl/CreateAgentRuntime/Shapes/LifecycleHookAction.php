<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HttpPostLifecycleHookAction|null $httpPost
 */
class LifecycleHookAction extends Shape
{
    /**
     * @param array{httpPost?: HttpPostLifecycleHookAction|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
