<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrainingJobsForHyperParameterTuningJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HyperParameterTuningJobName
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|null $StatusEquals
 * @property 'Name'|'CreationTime'|'Status'|'FinalObjectiveMetricValue'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 */
class ListTrainingJobsForHyperParameterTuningJobRequest extends Request
{
    /**
     * @param array{
     *     HyperParameterTuningJobName: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     StatusEquals?: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|null,
     *     SortBy?: 'Name'|'CreationTime'|'Status'|'FinalObjectiveMetricValue'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
