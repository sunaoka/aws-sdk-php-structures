<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IdleSettings|null $IdleSettings
 */
class AppLifecycleManagement extends Shape
{
    /**
     * @param array{IdleSettings?: IdleSettings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
