<?php

namespace Sunaoka\Aws\Structures\KendraRanking\ListRescoreExecutionPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property 'CREATING'|'UPDATING'|'ACTIVE'|'DELETING'|'FAILED' $Status
 */
class RescoreExecutionPlanSummary extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Id?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     UpdatedAt?: \Aws\Api\DateTimeResult,
     *     Status?: 'CREATING'|'UPDATING'|'ACTIVE'|'DELETING'|'FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
