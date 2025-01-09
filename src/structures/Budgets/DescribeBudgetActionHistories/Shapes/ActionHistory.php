<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgetActionHistories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property 'STANDBY'|'PENDING'|'EXECUTION_IN_PROGRESS'|'EXECUTION_SUCCESS'|'EXECUTION_FAILURE'|'REVERSE_IN_PROGRESS'|'REVERSE_SUCCESS'|'REVERSE_FAILURE'|'RESET_IN_PROGRESS'|'RESET_FAILURE' $Status
 * @property 'SYSTEM'|'CREATE_ACTION'|'DELETE_ACTION'|'UPDATE_ACTION'|'EXECUTE_ACTION' $EventType
 * @property ActionHistoryDetails $ActionHistoryDetails
 */
class ActionHistory extends Shape
{
    /**
     * @param array{
     *     Timestamp: \Aws\Api\DateTimeResult,
     *     Status: 'STANDBY'|'PENDING'|'EXECUTION_IN_PROGRESS'|'EXECUTION_SUCCESS'|'EXECUTION_FAILURE'|'REVERSE_IN_PROGRESS'|'REVERSE_SUCCESS'|'REVERSE_FAILURE'|'RESET_IN_PROGRESS'|'RESET_FAILURE',
     *     EventType: 'SYSTEM'|'CREATE_ACTION'|'DELETE_ACTION'|'UPDATE_ACTION'|'EXECUTE_ACTION',
     *     ActionHistoryDetails: ActionHistoryDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
