<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueryExecutionId
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property 'DATA_MANIFEST'|'DATA_ROWS'|null $QueryResultType
 */
class GetQueryResultsRequest extends Request
{
    /**
     * @param array{
     *     QueryExecutionId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     QueryResultType?: 'DATA_MANIFEST'|'DATA_ROWS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
