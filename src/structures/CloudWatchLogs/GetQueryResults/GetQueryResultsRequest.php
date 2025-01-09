<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetQueryResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $queryId
 */
class GetQueryResultsRequest extends Request
{
    /**
     * @param array{queryId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
