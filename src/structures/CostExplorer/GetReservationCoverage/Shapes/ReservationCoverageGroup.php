<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $Attributes
 * @property Coverage|null $Coverage
 */
class ReservationCoverageGroup extends Shape
{
    /**
     * @param array{
     *     Attributes?: array<string, string>|null,
     *     Coverage?: Coverage|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
