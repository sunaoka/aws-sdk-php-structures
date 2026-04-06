<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $LifecycleManagement
 * @property int<60, 525600>|null $IdleTimeoutInMinutes
 * @property int<60, 525600>|null $MinIdleTimeoutInMinutes
 * @property int<60, 525600>|null $MaxIdleTimeoutInMinutes
 */
class IdleSettings extends Shape
{
    /**
     * @param array{
     *     LifecycleManagement?: 'ENABLED'|'DISABLED'|null,
     *     IdleTimeoutInMinutes?: int<60, 525600>|null,
     *     MinIdleTimeoutInMinutes?: int<60, 525600>|null,
     *     MaxIdleTimeoutInMinutes?: int<60, 525600>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
