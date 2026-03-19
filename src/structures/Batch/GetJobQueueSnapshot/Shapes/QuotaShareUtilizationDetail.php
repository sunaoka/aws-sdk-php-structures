<?php

namespace Sunaoka\Aws\Structures\Batch\GetJobQueueSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<QuotaShareCapacityUtilization>|null $topCapacityUtilization
 */
class QuotaShareUtilizationDetail extends Shape
{
    /**
     * @param array{topCapacityUtilization?: list<QuotaShareCapacityUtilization>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
