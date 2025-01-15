<?php

namespace Sunaoka\Aws\Structures\Sfn\StartExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stateMachineArn
 * @property string|null $name
 * @property string|null $input
 * @property string|null $traceHeader
 */
class StartExecutionRequest extends Request
{
    /**
     * @param array{
     *     stateMachineArn: string,
     *     name?: string|null,
     *     input?: string|null,
     *     traceHeader?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
