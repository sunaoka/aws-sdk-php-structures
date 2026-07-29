<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListQueries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceName
 * @property string|null $filter
 * @property int<1, 10000>|null $maxResults
 * @property string|null $nextToken
 */
class ListQueriesRequest extends Request
{
    /**
     * @param array{
     *     workspaceName: string,
     *     filter?: string|null,
     *     maxResults?: int<1, 10000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
