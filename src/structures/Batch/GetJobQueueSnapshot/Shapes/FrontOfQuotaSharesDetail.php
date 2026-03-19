<?php

namespace Sunaoka\Aws\Structures\Batch\GetJobQueueSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, list<FrontOfQuotaShareJobSummary>>|null $quotaShares
 * @property int|null $lastUpdatedAt
 */
class FrontOfQuotaSharesDetail extends Shape
{
    /**
     * @param array{
     *     quotaShares?: array<string, list<FrontOfQuotaShareJobSummary>>|null,
     *     lastUpdatedAt?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
