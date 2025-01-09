<?php

namespace Sunaoka\Aws\Structures\PCS\RegisterComputeNodeGroupInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterIdentifier
 * @property string $bootstrapId
 */
class RegisterComputeNodeGroupInstanceRequest extends Request
{
    /**
     * @param array{
     *     clusterIdentifier: string,
     *     bootstrapId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
