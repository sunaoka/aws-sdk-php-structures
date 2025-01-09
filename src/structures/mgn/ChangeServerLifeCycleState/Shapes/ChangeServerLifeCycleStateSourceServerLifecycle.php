<?php

namespace Sunaoka\Aws\Structures\mgn\ChangeServerLifeCycleState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'READY_FOR_TEST'|'READY_FOR_CUTOVER'|'CUTOVER' $state
 */
class ChangeServerLifeCycleStateSourceServerLifecycle extends Shape
{
    /**
     * @param array{state: 'READY_FOR_TEST'|'READY_FOR_CUTOVER'|'CUTOVER'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
