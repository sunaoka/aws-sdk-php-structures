<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ExecuteQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $queryStatement
 * @property string $nextToken
 * @property int $maxResults
 * @property string $clientToken
 */
class ExecuteQueryRequest extends Request
{
    /**
     * @param array{
     *     queryStatement: string,
     *     nextToken?: string,
     *     maxResults?: int,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
