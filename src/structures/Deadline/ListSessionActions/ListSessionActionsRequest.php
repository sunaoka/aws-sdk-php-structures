<?php

namespace Sunaoka\Aws\Structures\Deadline\ListSessionActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $jobId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string $queueId
 * @property string|null $sessionId
 * @property string|null $taskId
 */
class ListSessionActionsRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     jobId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     queueId: string,
     *     sessionId?: string|null,
     *     taskId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
