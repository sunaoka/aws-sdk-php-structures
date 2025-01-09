<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JsonOptions $Json
 * @property ExcelOptions $Excel
 * @property CsvOptions $Csv
 */
class FormatOptions extends Shape
{
    /**
     * @param array{
     *     Json?: JsonOptions,
     *     Excel?: ExcelOptions,
     *     Csv?: CsvOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
