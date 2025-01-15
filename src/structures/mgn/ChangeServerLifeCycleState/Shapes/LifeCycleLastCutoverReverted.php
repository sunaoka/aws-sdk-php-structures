<?php

namespace Sunaoka\Aws\Structures\mgn\ChangeServerLifeCycleState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $apiCallDateTime
 */
class LifeCycleLastCutoverReverted extends Shape
{
    /**
     * @param array{apiCallDateTime?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
