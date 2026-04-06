<?php

namespace Sunaoka\Aws\Structures\mgn\ResumeReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LifeCycleLastTestFinalized|null $finalized
 * @property LifeCycleLastTestInitiated|null $initiated
 * @property LifeCycleLastTestReverted|null $reverted
 */
class LifeCycleLastTest extends Shape
{
    /**
     * @param array{
     *     finalized?: LifeCycleLastTestFinalized|null,
     *     initiated?: LifeCycleLastTestInitiated|null,
     *     reverted?: LifeCycleLastTestReverted|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
