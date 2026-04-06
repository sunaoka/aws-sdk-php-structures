<?php

namespace Sunaoka\Aws\Structures\Deadline\DeleteQueueEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $queueEnvironmentId
 */
class DeleteQueueEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
     *     queueEnvironmentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
