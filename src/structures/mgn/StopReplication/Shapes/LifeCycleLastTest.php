<?php

namespace Sunaoka\Aws\Structures\mgn\StopReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LifeCycleLastTestInitiated|null $initiated
 * @property LifeCycleLastTestReverted|null $reverted
 * @property LifeCycleLastTestFinalized|null $finalized
 */
class LifeCycleLastTest extends Shape
{
    /**
     * @param array{
     *     initiated?: LifeCycleLastTestInitiated|null,
     *     reverted?: LifeCycleLastTestReverted|null,
     *     finalized?: LifeCycleLastTestFinalized|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
