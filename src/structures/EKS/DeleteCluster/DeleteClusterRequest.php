<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeleteClusterRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
