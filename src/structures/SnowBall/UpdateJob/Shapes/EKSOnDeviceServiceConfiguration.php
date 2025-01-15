<?php

namespace Sunaoka\Aws\Structures\SnowBall\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KubernetesVersion
 * @property string|null $EKSAnywhereVersion
 */
class EKSOnDeviceServiceConfiguration extends Shape
{
    /**
     * @param array{
     *     KubernetesVersion?: string|null,
     *     EKSAnywhereVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
