<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $LifecycleManagement
 * @property int $IdleTimeoutInMinutes
 * @property int $MinIdleTimeoutInMinutes
 * @property int $MaxIdleTimeoutInMinutes
 */
class IdleSettings extends Shape
{
    /**
     * @param array{
     *     LifecycleManagement?: 'ENABLED'|'DISABLED',
     *     IdleTimeoutInMinutes?: int,
     *     MinIdleTimeoutInMinutes?: int,
     *     MaxIdleTimeoutInMinutes?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
