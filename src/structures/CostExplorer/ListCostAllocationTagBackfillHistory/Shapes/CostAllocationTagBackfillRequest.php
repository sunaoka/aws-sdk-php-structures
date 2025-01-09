<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ListCostAllocationTagBackfillHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BackfillFrom
 * @property string $RequestedAt
 * @property string $CompletedAt
 * @property 'SUCCEEDED'|'PROCESSING'|'FAILED' $BackfillStatus
 * @property string $LastUpdatedAt
 */
class CostAllocationTagBackfillRequest extends Shape
{
    /**
     * @param array{
     *     BackfillFrom?: string,
     *     RequestedAt?: string,
     *     CompletedAt?: string,
     *     BackfillStatus?: 'SUCCEEDED'|'PROCESSING'|'FAILED',
     *     LastUpdatedAt?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
