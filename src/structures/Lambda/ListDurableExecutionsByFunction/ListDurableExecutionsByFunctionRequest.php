<?php

namespace Sunaoka\Aws\Structures\Lambda\ListDurableExecutionsByFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string|null $Qualifier
 * @property string|null $DurableExecutionName
 * @property list<'RUNNING'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'STOPPED'>|null $Statuses
 * @property \Aws\Api\DateTimeResult|null $StartedAfter
 * @property \Aws\Api\DateTimeResult|null $StartedBefore
 * @property bool|null $ReverseOrder
 * @property string|null $Marker
 * @property int<0, 1000>|null $MaxItems
 */
class ListDurableExecutionsByFunctionRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     Qualifier?: string|null,
     *     DurableExecutionName?: string|null,
     *     Statuses?: list<'RUNNING'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'STOPPED'>|null,
     *     StartedAfter?: \Aws\Api\DateTimeResult|null,
     *     StartedBefore?: \Aws\Api\DateTimeResult|null,
     *     ReverseOrder?: bool|null,
     *     Marker?: string|null,
     *     MaxItems?: int<0, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
