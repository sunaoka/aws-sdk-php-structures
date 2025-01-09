<?php

namespace Sunaoka\Aws\Structures\DataZone\GetJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LineageSqlQueryRunDetails $sqlQueryRunDetails
 */
class LineageRunDetails extends Shape
{
    /**
     * @param array{sqlQueryRunDetails?: LineageSqlQueryRunDetails} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
