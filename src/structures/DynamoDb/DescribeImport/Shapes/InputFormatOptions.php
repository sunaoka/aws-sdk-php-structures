<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeImport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CsvOptions $Csv
 */
class InputFormatOptions extends Shape
{
    /**
     * @param array{Csv?: CsvOptions} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
