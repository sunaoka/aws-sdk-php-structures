<?php

namespace Sunaoka\Aws\Structures\Sfn\StopExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $executionArn
 * @property string|null $error
 * @property string|null $cause
 */
class StopExecutionRequest extends Request
{
    /**
     * @param array{
     *     executionArn: string,
     *     error?: string|null,
     *     cause?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
