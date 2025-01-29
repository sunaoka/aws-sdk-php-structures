<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property 'ENDED' $targetLifecycleStatus
 * @property string $farmId
 * @property string $queueId
 * @property string $jobId
 * @property string $sessionId
 */
class UpdateSessionRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     targetLifecycleStatus: 'ENDED',
     *     farmId: string,
     *     queueId: string,
     *     jobId: string,
     *     sessionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
