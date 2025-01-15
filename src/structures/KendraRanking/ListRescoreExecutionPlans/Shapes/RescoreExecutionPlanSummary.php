<?php

namespace Sunaoka\Aws\Structures\KendraRanking\ListRescoreExecutionPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Id
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property 'CREATING'|'UPDATING'|'ACTIVE'|'DELETING'|'FAILED'|null $Status
 */
class RescoreExecutionPlanSummary extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Id?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'CREATING'|'UPDATING'|'ACTIVE'|'DELETING'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
