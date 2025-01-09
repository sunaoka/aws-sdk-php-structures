<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueryExecutionId
 * @property string $NextToken
 * @property int $MaxResults
 */
class GetQueryResultsRequest extends Request
{
    /**
     * @param array{
     *     QueryExecutionId: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
