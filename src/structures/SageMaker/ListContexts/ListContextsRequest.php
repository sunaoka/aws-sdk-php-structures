<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListContexts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SourceUri
 * @property string|null $ContextType
 * @property \Aws\Api\DateTimeResult|null $CreatedAfter
 * @property \Aws\Api\DateTimeResult|null $CreatedBefore
 * @property 'Name'|'CreationTime'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListContextsRequest extends Request
{
    /**
     * @param array{
     *     SourceUri?: string|null,
     *     ContextType?: string|null,
     *     CreatedAfter?: \Aws\Api\DateTimeResult|null,
     *     CreatedBefore?: \Aws\Api\DateTimeResult|null,
     *     SortBy?: 'Name'|'CreationTime'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
