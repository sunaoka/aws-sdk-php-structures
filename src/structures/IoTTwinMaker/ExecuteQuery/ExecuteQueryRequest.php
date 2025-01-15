<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ExecuteQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $queryStatement
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ExecuteQueryRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     queryStatement: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
