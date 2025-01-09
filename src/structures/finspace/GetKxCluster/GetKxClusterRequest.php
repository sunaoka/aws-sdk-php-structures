<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $clusterName
 */
class GetKxClusterRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     clusterName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
