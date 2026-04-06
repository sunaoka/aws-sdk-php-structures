<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetLifecycleExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $lifecycleExecutionId
 */
class GetLifecycleExecutionRequest extends Request
{
    /**
     * @param array{lifecycleExecutionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
