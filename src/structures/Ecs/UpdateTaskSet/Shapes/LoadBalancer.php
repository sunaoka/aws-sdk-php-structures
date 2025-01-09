<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateTaskSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $targetGroupArn
 * @property string $loadBalancerName
 * @property string $containerName
 * @property int $containerPort
 */
class LoadBalancer extends Shape
{
    /**
     * @param array{
     *     targetGroupArn?: string,
     *     loadBalancerName?: string,
     *     containerName?: string,
     *     containerPort?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
