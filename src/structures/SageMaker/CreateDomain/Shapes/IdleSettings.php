<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $LifecycleManagement
 * @property int<60, 525600> $IdleTimeoutInMinutes
 * @property int<60, 525600> $MinIdleTimeoutInMinutes
 * @property int<60, 525600> $MaxIdleTimeoutInMinutes
 */
class IdleSettings extends Shape
{
    /**
     * @param array{
     *     LifecycleManagement?: 'ENABLED'|'DISABLED',
     *     IdleTimeoutInMinutes?: int<60, 525600>,
     *     MinIdleTimeoutInMinutes?: int<60, 525600>,
     *     MaxIdleTimeoutInMinutes?: int<60, 525600>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
