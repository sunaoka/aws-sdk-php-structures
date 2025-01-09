<?php

namespace Sunaoka\Aws\Structures\Deadline\ListSessionActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $jobId
 * @property string $sessionId
 * @property string $taskId
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListSessionActionsRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
     *     jobId: string,
     *     sessionId?: string,
     *     taskId?: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
