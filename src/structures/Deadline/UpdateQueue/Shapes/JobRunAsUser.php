<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PosixUser|null $posix
 * @property WindowsUser|null $windows
 * @property 'QUEUE_CONFIGURED_USER'|'WORKER_AGENT_USER' $runAs
 */
class JobRunAsUser extends Shape
{
    /**
     * @param array{
     *     posix?: PosixUser|null,
     *     windows?: WindowsUser|null,
     *     runAs: 'QUEUE_CONFIGURED_USER'|'WORKER_AGENT_USER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
