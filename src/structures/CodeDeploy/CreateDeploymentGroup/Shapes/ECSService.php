<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\CreateDeploymentGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceName
 * @property string $clusterName
 */
class ECSService extends Shape
{
    /**
     * @param array{
     *     serviceName?: string,
     *     clusterName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
