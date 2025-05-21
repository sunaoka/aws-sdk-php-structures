<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListCommandExecutionsForSandbox\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $sandboxId
 * @property \Aws\Api\DateTimeResult|null $submitTime
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string|null $status
 * @property string|null $command
 * @property 'SHELL'|null $type
 * @property string|null $exitCode
 * @property string|null $standardOutputContent
 * @property string|null $standardErrContent
 * @property LogsLocation|null $logs
 * @property string|null $sandboxArn
 */
class CommandExecution extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     sandboxId?: string|null,
     *     submitTime?: \Aws\Api\DateTimeResult|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     status?: string|null,
     *     command?: string|null,
     *     type?: 'SHELL'|null,
     *     exitCode?: string|null,
     *     standardOutputContent?: string|null,
     *     standardErrContent?: string|null,
     *     logs?: LogsLocation|null,
     *     sandboxArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
