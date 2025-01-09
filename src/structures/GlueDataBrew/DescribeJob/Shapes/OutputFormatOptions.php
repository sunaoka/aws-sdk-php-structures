<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CsvOutputOptions $Csv
 */
class OutputFormatOptions extends Shape
{
    /**
     * @param array{Csv?: CsvOutputOptions} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
