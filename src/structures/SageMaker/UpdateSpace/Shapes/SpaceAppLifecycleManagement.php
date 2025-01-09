<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SpaceIdleSettings $IdleSettings
 */
class SpaceAppLifecycleManagement extends Shape
{
    /**
     * @param array{IdleSettings?: SpaceIdleSettings} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
