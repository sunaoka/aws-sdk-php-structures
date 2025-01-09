<?php

namespace Sunaoka\Aws\Structures\PCS\DeleteComputeNodeGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterIdentifier
 * @property string $computeNodeGroupIdentifier
 * @property string $clientToken
 */
class DeleteComputeNodeGroupRequest extends Request
{
    /**
     * @param array{
     *     clusterIdentifier: string,
     *     computeNodeGroupIdentifier: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
