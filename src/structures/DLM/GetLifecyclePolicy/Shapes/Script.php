<?php

namespace Sunaoka\Aws\Structures\DLM\GetLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'PRE'|'POST'> $Stages
 * @property 'AWS_SYSTEMS_MANAGER' $ExecutionHandlerService
 * @property string $ExecutionHandler
 * @property bool $ExecuteOperationOnScriptFailure
 * @property int $ExecutionTimeout
 * @property int $MaximumRetryCount
 */
class Script extends Shape
{
    /**
     * @param array{
     *     Stages?: list<'PRE'|'POST'>,
     *     ExecutionHandlerService?: 'AWS_SYSTEMS_MANAGER',
     *     ExecutionHandler: string,
     *     ExecuteOperationOnScriptFailure?: bool,
     *     ExecutionTimeout?: int,
     *     MaximumRetryCount?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
