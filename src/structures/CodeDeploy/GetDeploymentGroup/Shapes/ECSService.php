<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeploymentGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serviceName
 * @property string|null $clusterName
 */
class ECSService extends Shape
{
    /**
     * @param array{
     *     serviceName?: string|null,
     *     clusterName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
