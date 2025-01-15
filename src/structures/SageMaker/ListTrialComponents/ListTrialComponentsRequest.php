<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrialComponents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ExperimentName
 * @property string|null $TrialName
 * @property string|null $SourceArn
 * @property \Aws\Api\DateTimeResult|null $CreatedAfter
 * @property \Aws\Api\DateTimeResult|null $CreatedBefore
 * @property 'Name'|'CreationTime'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListTrialComponentsRequest extends Request
{
    /**
     * @param array{
     *     ExperimentName?: string|null,
     *     TrialName?: string|null,
     *     SourceArn?: string|null,
     *     CreatedAfter?: \Aws\Api\DateTimeResult|null,
     *     CreatedBefore?: \Aws\Api\DateTimeResult|null,
     *     SortBy?: 'Name'|'CreationTime'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
