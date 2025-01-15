<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ImportTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CsvOptions|null $Csv
 */
class InputFormatOptions extends Shape
{
    /**
     * @param array{Csv?: CsvOptions|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
