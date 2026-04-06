<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $farmId
 * @property string $jobId
 * @property string $queueId
 * @property string $sessionId
 * @property 'ENDED' $targetLifecycleStatus
 */
class UpdateSessionRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     farmId: string,
     *     jobId: string,
     *     queueId: string,
     *     sessionId: string,
     *     targetLifecycleStatus: 'ENDED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
