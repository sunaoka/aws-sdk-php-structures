<?php

namespace Sunaoka\Aws\Structures\DataZone\GetJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LineageSqlQueryRunDetails|null $sqlQueryRunDetails
 */
class LineageRunDetails extends Shape
{
    /**
     * @param array{sqlQueryRunDetails?: LineageSqlQueryRunDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
