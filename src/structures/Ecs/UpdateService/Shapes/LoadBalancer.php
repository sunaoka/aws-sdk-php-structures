<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $targetGroupArn
 * @property string|null $loadBalancerName
 * @property string|null $containerName
 * @property int|null $containerPort
 * @property AdvancedConfiguration|null $advancedConfiguration
 */
class LoadBalancer extends Shape
{
    /**
     * @param array{
     *     targetGroupArn?: string|null,
     *     loadBalancerName?: string|null,
     *     containerName?: string|null,
     *     containerPort?: int|null,
     *     advancedConfiguration?: AdvancedConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
