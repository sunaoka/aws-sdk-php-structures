<?php

namespace Sunaoka\Aws\Structures\DataZone\GetJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LineageRunDetails $lineageRunDetails
 */
class JobRunDetails extends Shape
{
    /**
     * @param array{lineageRunDetails?: LineageRunDetails} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
