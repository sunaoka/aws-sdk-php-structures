<?php

namespace Sunaoka\Aws\Structures\PCS\RegisterComputeNodeGroupInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'QUICK'|'MEDIUM'|'LONG'|null $profile
 * @property 'AUTO'|'REPLACE'|'ISOLATE'|'NONE'|null $repairAction
 */
class DeepHealthCheckOnStart extends Shape
{
    /**
     * @param array{
     *     profile?: 'NONE'|'QUICK'|'MEDIUM'|'LONG'|null,
     *     repairAction?: 'AUTO'|'REPLACE'|'ISOLATE'|'NONE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
