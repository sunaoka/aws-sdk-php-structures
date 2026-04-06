<?php

namespace Sunaoka\Aws\Structures\DLM\CreateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'PRE'|'POST'>|null $Stages
 * @property 'AWS_SYSTEMS_MANAGER'|null $ExecutionHandlerService
 * @property string $ExecutionHandler
 * @property bool|null $ExecuteOperationOnScriptFailure
 * @property int<10, 120>|null $ExecutionTimeout
 * @property int<0, 3>|null $MaximumRetryCount
 */
class Script extends Shape
{
    /**
     * @param array{
     *     Stages?: list<'PRE'|'POST'>|null,
     *     ExecutionHandlerService?: 'AWS_SYSTEMS_MANAGER'|null,
     *     ExecutionHandler: string,
     *     ExecuteOperationOnScriptFailure?: bool|null,
     *     ExecutionTimeout?: int<10, 120>|null,
     *     MaximumRetryCount?: int<0, 3>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
