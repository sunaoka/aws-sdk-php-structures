<?php

namespace Sunaoka\Aws\Structures\finspace\DeleteKxCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $clusterName
 * @property string $clientToken
 */
class DeleteKxClusterRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     clusterName: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
