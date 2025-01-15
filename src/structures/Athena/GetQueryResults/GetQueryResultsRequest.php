<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueryExecutionId
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class GetQueryResultsRequest extends Request
{
    /**
     * @param array{
     *     QueryExecutionId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
