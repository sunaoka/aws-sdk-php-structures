<?php

namespace Sunaoka\Aws\Structures\Sfn\StartExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stateMachineArn
 * @property string $name
 * @property string $input
 * @property string $traceHeader
 */
class StartExecutionRequest extends Request
{
    /**
     * @param array{
     *     stateMachineArn: string,
     *     name?: string,
     *     input?: string,
     *     traceHeader?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
