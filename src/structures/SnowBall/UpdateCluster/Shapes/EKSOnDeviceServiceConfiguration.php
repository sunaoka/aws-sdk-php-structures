<?php

namespace Sunaoka\Aws\Structures\SnowBall\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KubernetesVersion
 * @property string $EKSAnywhereVersion
 */
class EKSOnDeviceServiceConfiguration extends Shape
{
    /**
     * @param array{
     *     KubernetesVersion?: string,
     *     EKSAnywhereVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
