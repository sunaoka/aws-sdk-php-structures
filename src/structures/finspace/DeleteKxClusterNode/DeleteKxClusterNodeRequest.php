<?php

namespace Sunaoka\Aws\Structures\finspace\DeleteKxClusterNode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $clusterName
 * @property string $nodeId
 */
class DeleteKxClusterNodeRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     clusterName: string,
     *     nodeId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
