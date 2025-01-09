<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrainingJobsForHyperParameterTuningJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HyperParameterTuningJobName
 * @property string $NextToken
 * @property int $MaxResults
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $StatusEquals
 * @property 'Name'|'CreationTime'|'Status'|'FinalObjectiveMetricValue' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 */
class ListTrainingJobsForHyperParameterTuningJobRequest extends Request
{
    /**
     * @param array{
     *     HyperParameterTuningJobName: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     StatusEquals?: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped',
     *     SortBy?: 'Name'|'CreationTime'|'Status'|'FinalObjectiveMetricValue',
     *     SortOrder?: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
