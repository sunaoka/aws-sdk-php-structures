<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CancelLifecycleExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $lifecycleExecutionId
 * @property string $clientToken
 */
class CancelLifecycleExecutionRequest extends Request
{
    /**
     * @param array{
     *     lifecycleExecutionId: string,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
