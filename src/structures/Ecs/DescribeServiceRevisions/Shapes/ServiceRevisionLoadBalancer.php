<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $targetGroupArn
 * @property string|null $productionListenerRule
 */
class ServiceRevisionLoadBalancer extends Shape
{
    /**
     * @param array{
     *     targetGroupArn?: string|null,
     *     productionListenerRule?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
