<?php

namespace Sunaoka\Aws\Structures\Glacier\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CSVInput|null $csv
 */
class InputSerialization extends Shape
{
    /**
     * @param array{csv?: CSVInput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
