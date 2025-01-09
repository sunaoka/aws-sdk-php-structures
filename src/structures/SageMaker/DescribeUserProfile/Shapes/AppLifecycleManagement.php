<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeUserProfile\Shapes;

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
