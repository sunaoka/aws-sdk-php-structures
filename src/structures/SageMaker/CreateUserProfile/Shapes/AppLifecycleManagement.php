<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IdleSettings $IdleSettings
 */
class AppLifecycleManagement extends Shape
{
    /**
     * @param array{IdleSettings?: IdleSettings} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
