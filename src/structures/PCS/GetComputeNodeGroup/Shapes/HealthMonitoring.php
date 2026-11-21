<?php

namespace Sunaoka\Aws\Structures\PCS\GetComputeNodeGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'STANDARD'|null $mode
 * @property 'AUTO'|'REPLACE'|'ISOLATE'|'NONE'|null $repairAction
 */
class HealthMonitoring extends Shape
{
    /**
     * @param array{
     *     mode?: 'NONE'|'STANDARD'|null,
     *     repairAction?: 'AUTO'|'REPLACE'|'ISOLATE'|'NONE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
