<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ExecuteQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $queryStatement
 * @property int $maxResults
 * @property string $nextToken
 */
class ExecuteQueryRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     queryStatement: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
