<?php

namespace Sunaoka\Aws\Structures\Deadline\ListSessionActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $jobId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property string|null $sessionId
 * @property string|null $taskId
 */
class ListSessionActionsRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
     *     jobId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     sessionId?: string|null,
     *     taskId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
