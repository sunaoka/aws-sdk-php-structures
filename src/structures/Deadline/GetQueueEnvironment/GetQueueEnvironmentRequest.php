<?php

namespace Sunaoka\Aws\Structures\Deadline\GetQueueEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $queueEnvironmentId
 * @property string $queueId
 */
class GetQueueEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     queueEnvironmentId: string,
     *     queueId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
