<?php

namespace Sunaoka\Aws\Structures\Kafka\DeleteCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property string $CurrentVersion
 */
class DeleteClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     CurrentVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
