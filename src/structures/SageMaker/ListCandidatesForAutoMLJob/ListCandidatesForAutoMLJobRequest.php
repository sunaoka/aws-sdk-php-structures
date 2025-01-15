<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListCandidatesForAutoMLJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoMLJobName
 * @property 'Completed'|'InProgress'|'Failed'|'Stopped'|'Stopping'|null $StatusEquals
 * @property string|null $CandidateNameEquals
 * @property 'Ascending'|'Descending'|null $SortOrder
 * @property 'CreationTime'|'Status'|'FinalObjectiveMetricValue'|null $SortBy
 * @property int<1, 300>|null $MaxResults
 * @property string|null $NextToken
 */
class ListCandidatesForAutoMLJobRequest extends Request
{
    /**
     * @param array{
     *     AutoMLJobName: string,
     *     StatusEquals?: 'Completed'|'InProgress'|'Failed'|'Stopped'|'Stopping'|null,
     *     CandidateNameEquals?: string|null,
     *     SortOrder?: 'Ascending'|'Descending'|null,
     *     SortBy?: 'CreationTime'|'Status'|'FinalObjectiveMetricValue'|null,
     *     MaxResults?: int<1, 300>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
