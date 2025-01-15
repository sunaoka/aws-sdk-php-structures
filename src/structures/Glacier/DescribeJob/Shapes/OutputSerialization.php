<?php

namespace Sunaoka\Aws\Structures\Glacier\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CSVOutput|null $csv
 */
class OutputSerialization extends Shape
{
    /**
     * @param array{csv?: CSVOutput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
