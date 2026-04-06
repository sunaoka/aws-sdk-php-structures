<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\StartWorkspacesPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PoolId
 */
class StartWorkspacesPoolRequest extends Request
{
    /**
     * @param array{PoolId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
