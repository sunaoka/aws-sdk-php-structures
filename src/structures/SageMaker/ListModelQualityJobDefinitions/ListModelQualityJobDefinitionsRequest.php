<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListModelQualityJobDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointName
 * @property 'Name'|'CreationTime' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 * @property string $NextToken
 * @property int $MaxResults
 * @property string $NameContains
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 */
class ListModelQualityJobDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     EndpointName?: string,
     *     SortBy?: 'Name'|'CreationTime',
     *     SortOrder?: 'Ascending'|'Descending',
     *     NextToken?: string,
     *     MaxResults?: int,
     *     NameContains?: string,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
