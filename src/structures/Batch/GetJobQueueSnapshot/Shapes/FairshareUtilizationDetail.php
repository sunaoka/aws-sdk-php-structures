<?php

namespace Sunaoka\Aws\Structures\Batch\GetJobQueueSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $activeShareCount
 * @property list<FairshareCapacityUtilization>|null $topCapacityUtilization
 */
class FairshareUtilizationDetail extends Shape
{
    /**
     * @param array{
     *     activeShareCount?: int|null,
     *     topCapacityUtilization?: list<FairshareCapacityUtilization>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
