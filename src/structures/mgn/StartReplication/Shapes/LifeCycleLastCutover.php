<?php

namespace Sunaoka\Aws\Structures\mgn\StartReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LifeCycleLastCutoverFinalized|null $finalized
 * @property LifeCycleLastCutoverInitiated|null $initiated
 * @property LifeCycleLastCutoverReverted|null $reverted
 */
class LifeCycleLastCutover extends Shape
{
    /**
     * @param array{
     *     finalized?: LifeCycleLastCutoverFinalized|null,
     *     initiated?: LifeCycleLastCutoverInitiated|null,
     *     reverted?: LifeCycleLastCutoverReverted|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
