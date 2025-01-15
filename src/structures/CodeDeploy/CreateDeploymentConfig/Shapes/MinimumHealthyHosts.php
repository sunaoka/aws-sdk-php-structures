<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\CreateDeploymentConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HOST_COUNT'|'FLEET_PERCENT'|null $type
 * @property int|null $value
 */
class MinimumHealthyHosts extends Shape
{
    /**
     * @param array{
     *     type?: 'HOST_COUNT'|'FLEET_PERCENT'|null,
     *     value?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
