<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListTriggers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string|null $status
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListTriggersRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     status?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
