<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeploymentConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HOST_COUNT'|'FLEET_PERCENT' $type
 * @property int $value
 */
class MinimumHealthyHosts extends Shape
{
    /**
     * @param array{
     *     type?: 'HOST_COUNT'|'FLEET_PERCENT',
     *     value?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
