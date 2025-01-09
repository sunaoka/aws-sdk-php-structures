<?php

namespace Sunaoka\Aws\Structures\Glacier\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CSVInput $csv
 */
class InputSerialization extends Shape
{
    /**
     * @param array{csv?: CSVInput} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
