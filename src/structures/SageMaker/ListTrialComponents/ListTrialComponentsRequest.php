<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrialComponents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExperimentName
 * @property string $TrialName
 * @property string $SourceArn
 * @property \Aws\Api\DateTimeResult $CreatedAfter
 * @property \Aws\Api\DateTimeResult $CreatedBefore
 * @property 'Name'|'CreationTime' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListTrialComponentsRequest extends Request
{
    /**
     * @param array{
     *     ExperimentName?: string,
     *     TrialName?: string,
     *     SourceArn?: string,
     *     CreatedAfter?: \Aws\Api\DateTimeResult,
     *     CreatedBefore?: \Aws\Api\DateTimeResult,
     *     SortBy?: 'Name'|'CreationTime',
     *     SortOrder?: 'Ascending'|'Descending',
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
