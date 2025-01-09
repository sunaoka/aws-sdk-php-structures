<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ExecuteQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $queryStatement
 * @property string $nextToken
 * @property int<1, max> $maxResults
 * @property string $clientToken
 */
class ExecuteQueryRequest extends Request
{
    /**
     * @param array{
     *     queryStatement: string,
     *     nextToken?: string,
     *     maxResults?: int<1, max>,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
