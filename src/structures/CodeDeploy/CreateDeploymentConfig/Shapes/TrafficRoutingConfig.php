<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\CreateDeploymentConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TimeBasedCanary'|'TimeBasedLinear'|'AllAtOnce'|null $type
 * @property TimeBasedCanary|null $timeBasedCanary
 * @property TimeBasedLinear|null $timeBasedLinear
 */
class TrafficRoutingConfig extends Shape
{
    /**
     * @param array{
     *     type?: 'TimeBasedCanary'|'TimeBasedLinear'|'AllAtOnce'|null,
     *     timeBasedCanary?: TimeBasedCanary|null,
     *     timeBasedLinear?: TimeBasedLinear|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
