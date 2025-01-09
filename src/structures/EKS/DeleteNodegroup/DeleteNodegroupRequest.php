<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteNodegroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $nodegroupName
 */
class DeleteNodegroupRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     nodegroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
