<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'containerInsights' $name
 * @property string $value
 */
class ClusterSetting extends Shape
{
    /**
     * @param array{
     *     name?: 'containerInsights',
     *     value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
