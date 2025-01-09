<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListCandidatesForAutoMLJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoMLJobName
 * @property 'Completed'|'InProgress'|'Failed'|'Stopped'|'Stopping' $StatusEquals
 * @property string $CandidateNameEquals
 * @property 'Ascending'|'Descending' $SortOrder
 * @property 'CreationTime'|'Status'|'FinalObjectiveMetricValue' $SortBy
 * @property int<1, 300> $MaxResults
 * @property string $NextToken
 */
class ListCandidatesForAutoMLJobRequest extends Request
{
    /**
     * @param array{
     *     AutoMLJobName: string,
     *     StatusEquals?: 'Completed'|'InProgress'|'Failed'|'Stopped'|'Stopping',
     *     CandidateNameEquals?: string,
     *     SortOrder?: 'Ascending'|'Descending',
     *     SortBy?: 'CreationTime'|'Status'|'FinalObjectiveMetricValue',
     *     MaxResults?: int<1, 300>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
