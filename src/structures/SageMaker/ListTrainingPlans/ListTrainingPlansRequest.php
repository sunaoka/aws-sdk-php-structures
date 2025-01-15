<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrainingPlans;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property \Aws\Api\DateTimeResult|null $StartTimeAfter
 * @property \Aws\Api\DateTimeResult|null $StartTimeBefore
 * @property 'TrainingPlanName'|'StartTime'|'Status'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 * @property list<Shapes\TrainingPlanFilter>|null $Filters
 */
class ListTrainingPlansRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     StartTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     StartTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     SortBy?: 'TrainingPlanName'|'StartTime'|'Status'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null,
     *     Filters?: list<Shapes\TrainingPlanFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
