<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListThreatModelJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $maxResults
 * @property string $threatModelId
 * @property string $agentSpaceId
 * @property string|null $nextToken
 */
class ListThreatModelJobsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int|null,
     *     threatModelId: string,
     *     agentSpaceId: string,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
