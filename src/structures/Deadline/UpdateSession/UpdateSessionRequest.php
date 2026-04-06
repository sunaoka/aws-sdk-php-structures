<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $farmId
 * @property string $queueId
 * @property string $jobId
 * @property string $sessionId
 * @property 'ENDED' $targetLifecycleStatus
 */
class UpdateSessionRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     farmId: string,
     *     queueId: string,
     *     jobId: string,
     *     sessionId: string,
     *     targetLifecycleStatus: 'ENDED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
