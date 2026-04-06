<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteDaemon;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $daemonArn
 */
class DeleteDaemonRequest extends Request
{
    /**
     * @param array{daemonArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
