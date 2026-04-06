<?php

namespace Sunaoka\Aws\Structures\Deadline\GetQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PosixUser|null $posix
 * @property 'QUEUE_CONFIGURED_USER'|'WORKER_AGENT_USER' $runAs
 * @property WindowsUser|null $windows
 */
class JobRunAsUser extends Shape
{
    /**
     * @param array{
     *     posix?: PosixUser|null,
     *     runAs: 'QUEUE_CONFIGURED_USER'|'WORKER_AGENT_USER',
     *     windows?: WindowsUser|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
