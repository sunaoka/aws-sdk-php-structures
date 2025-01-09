<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeploymentConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TimeBasedCanary'|'TimeBasedLinear'|'AllAtOnce' $type
 * @property TimeBasedCanary $timeBasedCanary
 * @property TimeBasedLinear $timeBasedLinear
 */
class TrafficRoutingConfig extends Shape
{
    /**
     * @param array{
     *     type?: 'TimeBasedCanary'|'TimeBasedLinear'|'AllAtOnce',
     *     timeBasedCanary?: TimeBasedCanary,
     *     timeBasedLinear?: TimeBasedLinear
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
