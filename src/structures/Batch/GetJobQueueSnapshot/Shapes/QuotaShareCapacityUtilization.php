<?php

namespace Sunaoka\Aws\Structures\Batch\GetJobQueueSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $quotaShareName
 * @property list<QuotaShareCapacityUsage>|null $capacityUsage
 */
class QuotaShareCapacityUtilization extends Shape
{
    /**
     * @param array{
     *     quotaShareName?: string|null,
     *     capacityUsage?: list<QuotaShareCapacityUsage>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
