<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\TerminateWorkspacesPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PoolId
 */
class TerminateWorkspacesPoolRequest extends Request
{
    /**
     * @param array{PoolId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
