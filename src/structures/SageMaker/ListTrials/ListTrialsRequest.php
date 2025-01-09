<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExperimentName
 * @property string $TrialComponentName
 * @property \Aws\Api\DateTimeResult $CreatedAfter
 * @property \Aws\Api\DateTimeResult $CreatedBefore
 * @property 'Name'|'CreationTime' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListTrialsRequest extends Request
{
    /**
     * @param array{
     *     ExperimentName?: string,
     *     TrialComponentName?: string,
     *     CreatedAfter?: \Aws\Api\DateTimeResult,
     *     CreatedBefore?: \Aws\Api\DateTimeResult,
     *     SortBy?: 'Name'|'CreationTime',
     *     SortOrder?: 'Ascending'|'Descending',
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
