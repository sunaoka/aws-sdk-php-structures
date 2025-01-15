<?php

namespace Sunaoka\Aws\Structures\Batch\CreateSchedulingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $shareDecaySeconds
 * @property int|null $computeReservation
 * @property list<ShareAttributes>|null $shareDistribution
 */
class FairsharePolicy extends Shape
{
    /**
     * @param array{
     *     shareDecaySeconds?: int|null,
     *     computeReservation?: int|null,
     *     shareDistribution?: list<ShareAttributes>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
