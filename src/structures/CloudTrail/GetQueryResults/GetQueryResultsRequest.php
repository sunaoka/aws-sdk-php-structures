<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetQueryResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $EventDataStore
 * @property string $QueryId
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxQueryResults
 * @property string|null $EventDataStoreOwnerAccountId
 */
class GetQueryResultsRequest extends Request
{
    /**
     * @param array{
     *     EventDataStore?: string|null,
     *     QueryId: string,
     *     NextToken?: string|null,
     *     MaxQueryResults?: int<1, 1000>|null,
     *     EventDataStoreOwnerAccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
