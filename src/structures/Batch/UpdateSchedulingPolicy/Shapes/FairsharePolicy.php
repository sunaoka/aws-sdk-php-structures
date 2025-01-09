<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateSchedulingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $shareDecaySeconds
 * @property int $computeReservation
 * @property list<ShareAttributes> $shareDistribution
 */
class FairsharePolicy extends Shape
{
    /**
     * @param array{
     *     shareDecaySeconds?: int,
     *     computeReservation?: int,
     *     shareDistribution?: list<ShareAttributes>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
