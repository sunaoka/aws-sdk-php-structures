<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ExecuteQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $queryStatement
 * @property string|null $nextToken
 * @property int<1, max>|null $maxResults
 * @property string|null $clientToken
 */
class ExecuteQueryRequest extends Request
{
    /**
     * @param array{
     *     queryStatement: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, max>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
