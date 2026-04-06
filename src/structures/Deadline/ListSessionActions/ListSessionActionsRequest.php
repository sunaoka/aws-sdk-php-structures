<?php

namespace Sunaoka\Aws\Structures\Deadline\ListSessionActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $jobId
 * @property string|null $sessionId
 * @property string|null $taskId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListSessionActionsRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
     *     jobId: string,
     *     sessionId?: string|null,
     *     taskId?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
