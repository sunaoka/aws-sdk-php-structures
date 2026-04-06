<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\StopWorkspacesPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PoolId
 */
class StopWorkspacesPoolRequest extends Request
{
    /**
     * @param array{PoolId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
