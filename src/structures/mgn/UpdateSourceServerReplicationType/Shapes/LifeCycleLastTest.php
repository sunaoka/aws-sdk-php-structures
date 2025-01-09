<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateSourceServerReplicationType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LifeCycleLastTestFinalized $finalized
 * @property LifeCycleLastTestInitiated $initiated
 * @property LifeCycleLastTestReverted $reverted
 */
class LifeCycleLastTest extends Shape
{
    /**
     * @param array{
     *     finalized?: LifeCycleLastTestFinalized,
     *     initiated?: LifeCycleLastTestInitiated,
     *     reverted?: LifeCycleLastTestReverted
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
