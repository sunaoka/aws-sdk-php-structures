<?php

namespace Sunaoka\Aws\Structures\Glacier\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CSVOutput $csv
 */
class OutputSerialization extends Shape
{
    /**
     * @param array{csv?: CSVOutput} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
