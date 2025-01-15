<?php

namespace Sunaoka\Aws\Structures\Sfn\ListExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $executionArn
 * @property string $stateMachineArn
 * @property string $name
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'ABORTED'|'PENDING_REDRIVE' $status
 * @property \Aws\Api\DateTimeResult $startDate
 * @property \Aws\Api\DateTimeResult|null $stopDate
 * @property string|null $mapRunArn
 * @property int<0, max>|null $itemCount
 * @property string|null $stateMachineVersionArn
 * @property string|null $stateMachineAliasArn
 * @property int|null $redriveCount
 * @property \Aws\Api\DateTimeResult|null $redriveDate
 */
class ExecutionListItem extends Shape
{
    /**
     * @param array{
     *     executionArn: string,
     *     stateMachineArn: string,
     *     name: string,
     *     status: 'RUNNING'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'ABORTED'|'PENDING_REDRIVE',
     *     startDate: \Aws\Api\DateTimeResult,
     *     stopDate?: \Aws\Api\DateTimeResult|null,
     *     mapRunArn?: string|null,
     *     itemCount?: int<0, max>|null,
     *     stateMachineVersionArn?: string|null,
     *     stateMachineAliasArn?: string|null,
     *     redriveCount?: int|null,
     *     redriveDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
