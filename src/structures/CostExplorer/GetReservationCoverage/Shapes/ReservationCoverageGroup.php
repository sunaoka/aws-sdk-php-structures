<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $Attributes
 * @property Coverage $Coverage
 */
class ReservationCoverageGroup extends Shape
{
    /**
     * @param array{
     *     Attributes?: array<string, string>,
     *     Coverage?: Coverage
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
