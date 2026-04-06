<?php

namespace Sunaoka\Aws\Structures\PCS\GetComputeNodeGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterIdentifier
 * @property string $computeNodeGroupIdentifier
 */
class GetComputeNodeGroupRequest extends Request
{
    /**
     * @param array{
     *     clusterIdentifier: string,
     *     computeNodeGroupIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
