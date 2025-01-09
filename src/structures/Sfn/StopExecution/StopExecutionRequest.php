<?php

namespace Sunaoka\Aws\Structures\Sfn\StopExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $executionArn
 * @property string $error
 * @property string $cause
 */
class StopExecutionRequest extends Request
{
    /**
     * @param array{
     *     executionArn: string,
     *     error?: string,
     *     cause?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
