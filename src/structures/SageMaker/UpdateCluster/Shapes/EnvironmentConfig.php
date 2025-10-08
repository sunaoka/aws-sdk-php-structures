<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FSxLustreConfig|null $FSxLustreConfig
 */
class EnvironmentConfig extends Shape
{
    /**
     * @param array{FSxLustreConfig?: FSxLustreConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
