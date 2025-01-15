<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeploymentInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Success'|'ScriptMissing'|'ScriptNotExecutable'|'ScriptTimedOut'|'ScriptFailed'|'UnknownError'|null $errorCode
 * @property string|null $scriptName
 * @property string|null $message
 * @property string|null $logTail
 */
class Diagnostics extends Shape
{
    /**
     * @param array{
     *     errorCode?: 'Success'|'ScriptMissing'|'ScriptNotExecutable'|'ScriptTimedOut'|'ScriptFailed'|'UnknownError'|null,
     *     scriptName?: string|null,
     *     message?: string|null,
     *     logTail?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
