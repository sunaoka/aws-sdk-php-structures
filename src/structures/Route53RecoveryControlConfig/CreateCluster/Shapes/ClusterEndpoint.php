<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Endpoint
 * @property string|null $Region
 */
class ClusterEndpoint extends Shape
{
    /**
     * @param array{
     *     Endpoint?: string|null,
     *     Region?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
