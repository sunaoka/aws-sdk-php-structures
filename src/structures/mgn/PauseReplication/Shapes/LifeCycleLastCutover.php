<?php

namespace Sunaoka\Aws\Structures\mgn\PauseReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LifeCycleLastCutoverFinalized $finalized
 * @property LifeCycleLastCutoverInitiated $initiated
 * @property LifeCycleLastCutoverReverted $reverted
 */
class LifeCycleLastCutover extends Shape
{
    /**
     * @param array{
     *     finalized?: LifeCycleLastCutoverFinalized,
     *     initiated?: LifeCycleLastCutoverInitiated,
     *     reverted?: LifeCycleLastCutoverReverted
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
