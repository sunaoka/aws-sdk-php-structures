<?php

namespace Sunaoka\Aws\Structures\mgn\ChangeServerLifeCycleState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LifeCycleLastCutoverInitiated|null $initiated
 * @property LifeCycleLastCutoverReverted|null $reverted
 * @property LifeCycleLastCutoverFinalized|null $finalized
 */
class LifeCycleLastCutover extends Shape
{
    /**
     * @param array{
     *     initiated?: LifeCycleLastCutoverInitiated|null,
     *     reverted?: LifeCycleLastCutoverReverted|null,
     *     finalized?: LifeCycleLastCutoverFinalized|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
