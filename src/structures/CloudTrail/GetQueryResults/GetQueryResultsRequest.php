<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetQueryResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventDataStore
 * @property string $QueryId
 * @property string $NextToken
 * @property int<1, 1000> $MaxQueryResults
 * @property string $EventDataStoreOwnerAccountId
 */
class GetQueryResultsRequest extends Request
{
    /**
     * @param array{
     *     EventDataStore?: string,
     *     QueryId: string,
     *     NextToken?: string,
     *     MaxQueryResults?: int<1, 1000>,
     *     EventDataStoreOwnerAccountId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
