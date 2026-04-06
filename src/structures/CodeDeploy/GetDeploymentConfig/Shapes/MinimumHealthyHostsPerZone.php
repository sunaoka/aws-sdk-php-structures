<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeploymentConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HOST_COUNT'|'FLEET_PERCENT'|null $type
 * @property int|null $value
 */
class MinimumHealthyHostsPerZone extends Shape
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
