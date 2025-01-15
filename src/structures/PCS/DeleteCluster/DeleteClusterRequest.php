<?php

namespace Sunaoka\Aws\Structures\PCS\DeleteCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterIdentifier
 * @property string|null $clientToken
 */
class DeleteClusterRequest extends Request
{
    /**
     * @param array{
     *     clusterIdentifier: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
