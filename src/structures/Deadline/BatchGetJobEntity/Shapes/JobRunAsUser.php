<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJobEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PosixUser $posix
 * @property WindowsUser $windows
 * @property 'QUEUE_CONFIGURED_USER'|'WORKER_AGENT_USER' $runAs
 */
class JobRunAsUser extends Shape
{
    /**
     * @param array{
     *     posix?: PosixUser,
     *     windows?: WindowsUser,
     *     runAs: 'QUEUE_CONFIGURED_USER'|'WORKER_AGENT_USER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
