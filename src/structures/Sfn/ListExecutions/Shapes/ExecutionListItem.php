<?php

namespace Sunaoka\Aws\Structures\Sfn\ListExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $executionArn
 * @property string $stateMachineArn
 * @property string $name
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'ABORTED'|'PENDING_REDRIVE' $status
 * @property \Aws\Api\DateTimeResult $startDate
 * @property \Aws\Api\DateTimeResult $stopDate
 * @property string $mapRunArn
 * @property int<0, max> $itemCount
 * @property string $stateMachineVersionArn
 * @property string $stateMachineAliasArn
 * @property int $redriveCount
 * @property \Aws\Api\DateTimeResult $redriveDate
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
     *     stopDate?: \Aws\Api\DateTimeResult,
     *     mapRunArn?: string,
     *     itemCount?: int<0, max>,
     *     stateMachineVersionArn?: string,
     *     stateMachineAliasArn?: string,
     *     redriveCount?: int,
     *     redriveDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
