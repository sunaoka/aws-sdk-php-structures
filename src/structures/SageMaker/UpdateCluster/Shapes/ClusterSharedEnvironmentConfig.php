<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DeleteIfNotUsed'|'Keep' $FSxLustreDeletionPolicy
 * @property FSxLustreConfig $FSxLustreConfig
 */
class ClusterSharedEnvironmentConfig extends Shape
{
    /**
     * @param array{
     *     FSxLustreDeletionPolicy: 'DeleteIfNotUsed'|'Keep',
     *     FSxLustreConfig: FSxLustreConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
