<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateClusterSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'containerInsights'|null $name
 * @property string|null $value
 */
class ClusterSetting extends Shape
{
    /**
     * @param array{
     *     name?: 'containerInsights'|null,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
