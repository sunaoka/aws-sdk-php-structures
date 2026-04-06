<?php

namespace Sunaoka\Aws\Structures\DSQL\GetCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 */
class GetClusterRequest extends Request
{
    /**
     * @param array{identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
