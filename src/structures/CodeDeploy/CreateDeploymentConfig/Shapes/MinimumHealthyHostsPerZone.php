<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\CreateDeploymentConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HOST_COUNT'|'FLEET_PERCENT' $type
 * @property int $value
 */
class MinimumHealthyHostsPerZone extends Shape
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
