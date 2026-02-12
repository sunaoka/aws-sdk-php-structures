<?php

namespace Sunaoka\Aws\Structures\Batch\GetJobQueueSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $shareIdentifier
 * @property list<FairshareCapacityUsage>|null $capacityUsage
 */
class FairshareCapacityUtilization extends Shape
{
    /**
     * @param array{
     *     shareIdentifier?: string|null,
     *     capacityUsage?: list<FairshareCapacityUsage>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
