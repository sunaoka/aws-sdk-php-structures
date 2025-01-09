<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrainingPlans;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property \Aws\Api\DateTimeResult $StartTimeAfter
 * @property \Aws\Api\DateTimeResult $StartTimeBefore
 * @property 'TrainingPlanName'|'StartTime'|'Status' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 * @property list<Shapes\TrainingPlanFilter> $Filters
 */
class ListTrainingPlansRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     StartTimeAfter?: \Aws\Api\DateTimeResult,
     *     StartTimeBefore?: \Aws\Api\DateTimeResult,
     *     SortBy?: 'TrainingPlanName'|'StartTime'|'Status',
     *     SortOrder?: 'Ascending'|'Descending',
     *     Filters?: list<Shapes\TrainingPlanFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
