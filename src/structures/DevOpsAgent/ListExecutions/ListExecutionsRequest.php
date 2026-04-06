<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $taskId
 * @property int|null $limit
 * @property string|null $nextToken
 */
class ListExecutionsRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     taskId: string,
     *     limit?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
