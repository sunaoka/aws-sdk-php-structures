<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ListCostAllocationTagBackfillHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BackfillFrom
 * @property string|null $RequestedAt
 * @property string|null $CompletedAt
 * @property 'SUCCEEDED'|'PROCESSING'|'FAILED'|null $BackfillStatus
 * @property string|null $LastUpdatedAt
 */
class CostAllocationTagBackfillRequest extends Shape
{
    /**
     * @param array{
     *     BackfillFrom?: string|null,
     *     RequestedAt?: string|null,
     *     CompletedAt?: string|null,
     *     BackfillStatus?: 'SUCCEEDED'|'PROCESSING'|'FAILED'|null,
     *     LastUpdatedAt?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
