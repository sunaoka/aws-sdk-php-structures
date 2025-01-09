<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeploymentInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Success'|'ScriptMissing'|'ScriptNotExecutable'|'ScriptTimedOut'|'ScriptFailed'|'UnknownError' $errorCode
 * @property string $scriptName
 * @property string $message
 * @property string $logTail
 */
class Diagnostics extends Shape
{
    /**
     * @param array{
     *     errorCode?: 'Success'|'ScriptMissing'|'ScriptNotExecutable'|'ScriptTimedOut'|'ScriptFailed'|'UnknownError',
     *     scriptName?: string,
     *     message?: string,
     *     logTail?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
