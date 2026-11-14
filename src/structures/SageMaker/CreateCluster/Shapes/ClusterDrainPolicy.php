<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 5400>|null $DrainTimeoutInSeconds
 * @property 'Force'|'Skip'|null $OnDrainTimeout
 */
class ClusterDrainPolicy extends Shape
{
    /**
     * @param array{
     *     DrainTimeoutInSeconds?: int<0, 5400>|null,
     *     OnDrainTimeout?: 'Force'|'Skip'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
