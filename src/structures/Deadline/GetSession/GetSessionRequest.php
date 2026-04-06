<?php

namespace Sunaoka\Aws\Structures\Deadline\GetSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $jobId
 * @property string $queueId
 * @property string $sessionId
 */
class GetSessionRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     jobId: string,
     *     queueId: string,
     *     sessionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
