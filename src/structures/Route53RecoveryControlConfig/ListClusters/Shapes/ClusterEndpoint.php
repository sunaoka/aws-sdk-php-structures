<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\ListClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Endpoint
 * @property string $Region
 */
class ClusterEndpoint extends Shape
{
    /**
     * @param array{
     *     Endpoint?: string,
     *     Region?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
