<?php

namespace Sunaoka\Aws\Structures\Deadline\AssumeQueueRoleForRead;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $queueId
 */
class AssumeQueueRoleForReadRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
